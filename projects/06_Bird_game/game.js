const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');
const startButton = document.getElementById('startButton');
const restartButton = document.getElementById('restartButton');
const thisgamever = 0.06;
let debugmode = 0; // true or false
// debugmode = true;

// 画像ロード用の変数
let imagesLoaded = 0;

// 鳥の画像をロードする
const birdImg = new Image();
birdImg.onload = function() {
    imagesLoaded++;
    initGame();
};
birdImg.src = 'images/bird.png';

// カラスの画像をロードする
const crowImg = new Image();
crowImg.onload = function() {
    imagesLoaded++;
    initGame();
};
crowImg.src = 'images/crow.png';

function isMobileDevice() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

function initGame() {
    if (imagesLoaded === 2) {  // 両方の画像がロードされたら
        gameState = 'title';
        gameLoop();
    }
}

const bird = { //リセットされるので初期値だが値に意味はない
    x: 100,
    y: canvas.height * 0.6,  // 画面の中央上に配置
    width: 48,
    height: 37,
    gravity: 0.08,
    lift: -3.2,
    velocity: 0,
    isFlapping: false,  // フラップ中かどうかを記録するフラグ
    flapStartTime: 0   // フラップ開始時間を記録する
};

const crows = [];
let gameState = 'title'; // 'title', 'playing', 'gameOver'
let frameCount = 0;
let score = 0;
let highScore = 0;
let isGameOver = false;
const initialCrowInterval = 70; // 敵生成間隔の初期値
let crowInterval = initialCrowInterval; // 現在の敵生成間隔
let lastCrowGeneration = 0; // 最後の敵生成フレーム

const flapGauge = {
    max: 100, // ゲージの最大値
    current: 100, // 現在のゲージの値
    decreaseRate: 0.1, // ゲージの減少速度
    refillRate: 0.1, // ゲージの回復速度
    refillInterval: 1000 // ゲージの回復間隔（ミリ秒）
};

function handleInputStart(event) {
    event.preventDefault(); // デフォルトのイベントを無効化（スクロールなど）
    let touchX, touchY;
    if (event.type === 'touchstart') {
        touchX = event.touches[0].clientX;
        touchY = event.touches[0].clientY;
    } else {
        touchX = event.clientX;
        touchY = event.clientY;
    }
    // 縦向きの場合、座標を調整
    if (window.innerHeight > window.innerWidth) {
        const temp = touchX;
        touchX = touchY;
        touchY = window.innerHeight - temp;
    }

    if (flapGauge.current > 0 || !bird.isFlapping) {
        bird.isFlapping = true;
        bird.flapStartTime = Date.now();
    }
}
function handleInputEnd(event) {
    event.preventDefault();
    bird.isFlapping = false;
}

document.addEventListener('mousedown', handleInputStart);   // マウスイベント
document.addEventListener('mouseup', handleInputEnd);
document.addEventListener('touchstart', handleInputStart);  // タッチイベント
document.addEventListener('touchend', handleInputEnd);
restartButton.addEventListener('click', resetGame);

function drawBird() {
  ctx.drawImage(birdImg, bird.x, bird.y, bird.width, bird.height);
}

function updateBird() {
    if (bird.isFlapping) {
        const currentTime = Date.now();
        const flapDuration = (currentTime - bird.flapStartTime) / 100; // 長押しの時間を取得
        if (flapGauge.current > 0) {
            bird.velocity = bird.lift - flapDuration * 0.1; // 長押し時間に応じた上昇力を調整
            flapGauge.current -= flapGauge.decreaseRate; // ゲージを減少させる
            if (flapGauge.current < 0) flapGauge.current = 0;
        } else {
            bird.velocity = bird.lift; // ゲージがゼロでも短押しで上昇
        }
    } else {
        bird.velocity += bird.gravity;  // 重力による下降
    }
    bird.y += bird.velocity;
    // 画面下部での衝突判定
    if (bird.y + bird.height > canvas.height) {
        bird.y = canvas.height - bird.height;
        bird.velocity = 0;
        isGameOver = true;
    }
     // 画面上部での衝突判定
    if (bird.y < 0) {
        bird.y = 0;
        bird.velocity = 0;
        isGameOver = true;
    }
}

let debugscaleFactor;   //debug

function updateBirdSize() {
  const scaleFactor = Math.min(1 + score / 120, 2); // スコアに応じてサイズを増加させる。最大2倍
  bird.width = 48 * scaleFactor;
  bird.height = 37.6 * scaleFactor;
  debugscaleFactor = scaleFactor;
}

let debugWidth, debugHeight; //debug

function generateCrows() {
    if (frameCount - lastCrowGeneration >= crowInterval ) {
        const crowY = Math.random() * (canvas.height - 50); // サイズに合わせた生成範囲
        const crowWidth = 10 + (Math.random() * (50 + Math.min(score * 0.3, 40)));  // サイズをランダムに
        const crowHeight = 10 + (Math.random() * (50 + Math.min(score * 0.3, 40))); // サイズをランダムに
        debugWidth = crowWidth; //debug
        debugHeight = crowHeight; //debug
        crows.push({
            x: canvas.width,
            y: crowY,
            width: crowWidth,
            height: crowHeight,
            scored: false
        });
        lastCrowGeneration = frameCount;
    }
}

let debugspeed; //debug
function updateCrows() {
    const speed = Math.min(3 + score / 20, 8);  // スコアに応じて速度を上げるが、最大6に制限する
    debugspeed = speed; //debug
    for (let i = crows.length - 1; i >= 0; i--) {
        crows[i].x -= speed;
        if (crows[i].x + crows[i].width < bird.x && !crows[i].scored) {
            score++;
            if (crowInterval > 40) {
              crowInterval--;
            }
            crows[i].scored = true;
        }
        if (crows[i].x + crows[i].width < 0) {
            crows.splice(i, 1);
        }
    }
}

function drawCrows() {
    crows.forEach(crow => {
        ctx.drawImage(crowImg, crow.x, crow.y, crow.width, crow.height);
    });
}

function drawScore() {
    ctx.fillStyle = '#000';
    ctx.font = '32px Arial';
    ctx.textAlign = 'left';  // テキストアラインメントを左に設定
    ctx.fillText('Score: ' + score, 10, 30);
}

function drawGameOverScreen() {
    ctx.fillStyle = '#000';
    ctx.font = '50px Arial';
    ctx.textAlign = 'center';
    ctx.fillText('Game Over', canvas.width / 2, canvas.height / 2 - 50);
    ctx.font = '30px Arial';
    ctx.fillText('High Score: ' + highScore, canvas.width / 2, canvas.height / 2 + 10);
    ctx.fillText('Score: ' + score, canvas.width / 2, canvas.height / 2 + 50);
}

function drawFlapGauge() {
  const gaugeWidth = 200;  // ゲージの幅を200に増加
  const gaugeHeight = 20;  // ゲージの高さ
  const gaugeX = canvas.width - gaugeWidth - 20;  // X座標を調整
  const gaugeY = 10;  // Y座標
  ctx.fillStyle = '#888';  // ゲージの背景色
  ctx.fillRect(gaugeX, gaugeY, gaugeWidth, gaugeHeight);  // ゲージの背景を描画
  ctx.fillStyle = '#0f0';  // ゲージの現在の値の色
  const currentWidth = (flapGauge.current / flapGauge.max) * gaugeWidth;
  ctx.fillRect(gaugeX, gaugeY, currentWidth, gaugeHeight);  // ゲージの現在の値を描画
  ctx.strokeStyle = '#000';  // ゲージの枠の色
  ctx.strokeRect(gaugeX, gaugeY, gaugeWidth, gaugeHeight);  // ゲージの枠を描画
}

function checkCollision() {
    for (let i = 0; i < crows.length; i++) {
        const crow = crows[i];
        
        // 当たり判定を少し縮小するためのマージンを設定
        const birdMargin = 10; // 鳥の矩形を縮小する量
        const crowMargin = 5; // カラスの矩形を縮小する量
        
        // 矩形を縮小して判定を甘くする
        const birdRect = {
            x: bird.x + birdMargin,
            y: bird.y + birdMargin,
            width: bird.width - birdMargin * 2,
            height: bird.height - birdMargin * 2
        };
        
        const crowRect = {
            x: crow.x + crowMargin,
            y: crow.y + crowMargin,
            width: crow.width - crowMargin * 2,
            height: crow.height - crowMargin * 2
        };

        // 衝突判定
        if (birdRect.x < crowRect.x + crowRect.width &&
            birdRect.x + birdRect.width > crowRect.x &&
            birdRect.y < crowRect.y + crowRect.height &&
            birdRect.y + birdRect.height > crowRect.y) {
            return true;
        }
    }
    return false;
}

function resizeCanvas() {
    if (window.innerHeight > window.innerWidth) {
        // 縦向きの場合、幅と高さを入れ替える
        canvas.width = window.innerHeight;
        canvas.height = window.innerWidth;
    } else {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    // ゲーム要素のサイズや位置を再計算
    bird.y = canvas.height * 0.4;
    // その他の要素も必要に応じて調整
}

window.addEventListener('resize', resizeCanvas);
window.addEventListener('orientationchange', resizeCanvas);

function drawTitleScreen() {
  ctx.fillStyle = '#1DA1F2'; // 空色の背景
  ctx.fillRect(0, 0, canvas.width, canvas.height);
  ctx.fillStyle = '#FFF';
  ctx.font = '80px Arial';
  ctx.textAlign = 'center';
  ctx.fillText('Blue Bird', canvas.width / 2, canvas.height / 2 - 80);
  ctx.font = '30px Arial';
  ctx.fillText('Click or Tap “Start game”', canvas.width / 2, canvas.height / 2 + 20);
  startButton.style.display = 'block';
  if (debugmode == true) {
    ctx.fillStyle = 'red';
    ctx.textAlign = 'right';
    ctx.fillText('ver: ' + thisgamever, canvas.width - 10, canvas.height - 10);  // debug
    if (isMobileDevice()) {
        ctx.fillText('スマホ', canvas.width - 10, canvas.height - 50);  // debug
        } else {
            ctx.fillText('windows', canvas.width - 10, canvas.height - 50);  // debug
        }
    }
}

function enterFullscreen() {
    const element = document.documentElement;
    if (element.requestFullscreen) {
        element.requestFullscreen().catch(err => console.log('Fullscreen error:', err));
    } else if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen().catch(err => console.log('Fullscreen error:', err));
    } else if (element.webkitRequestFullscreen) {
        element.webkitRequestFullscreen().catch(err => console.log('Fullscreen error:', err));
    } else if (element.msRequestFullscreen) {
        element.msRequestFullscreen().catch(err => console.log('Fullscreen error:', err));
    }
}

function startGame() {
    gameState = 'playing';
    startButton.style.display = 'none';
    resetGame();
}


window.addEventListener('orientationchange', function() {
    if (isMobileDevice() && window.innerHeight > window.innerWidth) {
        alert("Please rotate your device to landscape mode for the best experience.");
    }
});

function resetGame() {
    gameState = 'playing';
    bird.x = 100;
    bird.y = canvas.height * 0.4,  // 画面の中央上に配置
    bird.width = 48;  // 初期サイズにリセット
    bird.height = 37; // 初期サイズにリセット
    bird.velocity = 0;
    bird.isFlapping = false;
    bird.flapStartTime = 0;  // フラップ開始時間をリセット
    crows.length = 0;
    frameCount = 0;
    score = 0;
    isGameOver = false;
    crowInterval = initialCrowInterval; // 敵生成間隔を初期値にリセット
    lastCrowGeneration = 0; // 敵生成フレームをリセット
    flapGauge.current = flapGauge.max; // ゲージをリセット
    restartButton.style.display = 'none';
    requestAnimationFrame(gameLoop);   // 画面全体をクリアしてゲーム開始
}

function gameLoop() {
    if (gameState === 'title') {
      drawTitleScreen();
      return;
    }
    if (gameState === 'gameOver') {
        if (score > highScore) {
            highScore = score;
        }
        drawGameOverScreen();
        restartButton.style.display = 'block';
        return;
    }

    ctx.clearRect(0, 0, canvas.width, canvas.height);

    updateBird();
    updateBirdSize(); // スコアに応じて鳥のサイズを更新
    drawBird();
    generateCrows();
    updateCrows();
    drawCrows();
    
    if (debugmode != true) {
        if (checkCollision()) {
            gameState = 'gameOver';
        }
        if (isGameOver === true) {
            gameState = 'gameOver';
        }
    }


    drawScore();
    drawFlapGauge();  // ゲージを描画

    frameCount++;
    if (frameCount % flapGauge.refillInterval === 0) {
        flapGauge.current += 0.1;  // ゲージを回復
        if (flapGauge.current > flapGauge.max) flapGauge.current = flapGauge.max;
    }
    drawDebugInfo();
    requestAnimationFrame(gameLoop);
}

startButton.addEventListener('click', startGame);
restartButton.addEventListener('click', resetGame);

initGame();

function drawDebugInfo() {
  if (debugmode == true) {
    let debugfillx = 120;
    let debugfilly = 17;
    ctx.fillStyle = 'red';
    ctx.font = '16px Arial';
    ctx.textAlign = 'right';
    ctx.fillText(`Bird Y:`, debugfillx, debugfilly*3);
    ctx.fillText(`Bird Velocity:`, debugfillx, debugfilly*4);
    ctx.fillText(`Is Game Over:`, debugfillx, debugfilly*5);
    ctx.fillText('frame Count:', debugfillx, debugfilly*6);
    ctx.fillText('crow Interval:', debugfillx, debugfilly*7);
    ctx.fillText('crow Wight:', debugfillx, debugfilly*8);
    ctx.fillText('crow Height:', debugfillx, debugfilly*9);
    ctx.fillText('Speed:', debugfillx, debugfilly*10);
    ctx.fillText('BirdSize:', debugfillx, debugfilly*11);
    ctx.fillText('debugmode:', debugfillx, debugfilly*12);

    debugfillx = 125;
    ctx.textAlign = 'left';
    ctx.fillText(bird.y, debugfillx, debugfilly*3);
    ctx.fillText(bird.velocity, debugfillx, debugfilly*4);
    ctx.fillText(isGameOver, debugfillx, debugfilly*5);
    ctx.fillText(frameCount, debugfillx, debugfilly*6);
    ctx.fillText(crowInterval, debugfillx, debugfilly*7);
    ctx.fillText(debugHeight, debugfillx, debugfilly*8);
    ctx.fillText(debugWidth, debugfillx, debugfilly*9);
    ctx.fillText(debugspeed, debugfillx, debugfilly*10);
    ctx.fillText(debugscaleFactor, debugfillx, debugfilly*11);
    ctx.fillText(debugmode, debugfillx, debugfilly*12);

    ctx.fillText(flapGauge.current, canvas.width - 215, 46);
    ctx.fillText('ver: ' + thisgamever, canvas.width - 100, canvas.height - 20);
  }
}
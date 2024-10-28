<div class="form-group row no-gutters">
  <label for="inputName" class="col-sm-4 col-form-label">参加者区分<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_radio name="参加者区分" id="guest-class" children="個人,グループ・団体"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="inputName" class="col-sm-4 col-form-label">お名前<span class="text-danger">（必須）</span></label>
  <div class="col-sm-4">
    姓 [mwform_text name="姓" id="guest-sei" size="30" placeholder="富山"]
  </div>
  <div class="col-sm-4">
    名 [mwform_text name="名" id="guest-mei" size="30" placeholder="太郎"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="inputName" class="col-sm-4 col-form-label">ふりがな</label>
  <div class="col-sm-4">
    せい [mwform_text name="せい" id="guest-sei-furi" size="30" placeholder="とやま"]
  </div>
  <div class="col-sm-4">
    めい [mwform_text name="めい" id="guest-mei-furi" size="30" placeholder="たろう"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="inputName-alpha" class="col-sm-4 col-form-label">(英文表記)</label>
  <div class="col-sm-4">
    [mwform_text name="姓(英文)" id="guest-sei-alpha" size="30" placeholder="TOYAMA"]
  </div>
  <div class="col-sm-4">
    [mwform_text name="名(英文)" id="guest-mei-alpha" size="30" placeholder="Taro"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="inputGroup" class="col-sm-4 col-form-label">グループ名（グループ・団体の場合）</label>
  <div class="col-sm-4">
    [mwform_text name="グループ名" id="group" size="30" placeholder="富山市ガラススタジオ"]
  </div>
</div>

※グループ・団体の方は以下代表者の情報をご入力ください。

<div class="form-group row no-gutters">
  <label for="inputBirthday" class="col-sm-4 col-form-label">生年月日<span class="text-danger">（必須）</span></label>
  <div class="col-sm-4">
    [mwform_datepicker name="生年月日" id="birthday" size="30" js="minDate:'-100y',yearRange:'-100:-10',showMonthAfterYear:'true',changeYear:'true',changeMonth:'true'" value="1999年03月03日"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="inputSex" class="col-sm-4 col-form-label">性別<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_select name="性別" id="sexCode" children="男性,女性,その他,無回答"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="zipcode" class="col-sm-4 col-form-label">郵便番号<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_zip name="zipcode" id="zipcode"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="prefSelect" class="col-sm-4 col-form-label">都道府県<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_select name="都道府県" id="prefSelect" children=":選択してください,北海道,青森県,岩手県,宮城県,秋田県,山形県,福島県,茨城県,栃木県,群馬県,埼玉県,千葉県,東京都,神奈川県,新潟県,富山県,石川県,福井県,山梨県,長野県,岐阜県,静岡県,愛知県,三重県,滋賀県,京都府,大阪府,兵庫県,奈良県,和歌山県,鳥取県,島根県,岡山県,広島県,山口県,徳島県,香川県,愛媛県,高知県,福岡県,佐賀県,長崎県,熊本県,大分県,宮崎県,鹿児島県,沖縄県" post_raw="true" value="富山県"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="city-input" class="col-sm-4 col-form-label">市区町村<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_text name="市区町村" id="city-input" size="30" placeholder="富山市西町"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="build-input" class="col-sm-4 col-form-label">地番、マンション、ビル、方書等</label>
  <div class="col-sm-8">
    [mwform_text name="地番、マンション、ビル、方書等" id="build-input" size="30" placeholder="5-1 Toyamaキラリビル"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="tel" class="col-sm-4 col-form-label">電話番号（日中連絡が取れるもの）<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_text name="電話番号" id="tel" size="19" maxlength="18" conv_half_alphanumeric="true"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="email" class="col-sm-4 col-form-label">Eメールアドレス<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_email name="email" id="email" size="60" placeholder="aaaa@bbb.co.jp"]
    ※キャリアメールアドレス（携帯電話）は推奨しません。
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="emailconfirm" class="col-sm-4 col-form-label">Eメールアドレス確認<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_email name="emailconfirm" id="emailconfirm" size="60" placeholder="aaaa@bbb.co.jp"]
    （確認のため再度入力してください）
  </div>
</div>

&nbsp;

<h4>作品について</h4>

<div class="form-group row no-gutters">
  <label for="number-of-works" class="col-sm-4 col-form-label">作品応募点数<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_select name="作品応募点数" id="number-of-works" children="1点,2点"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="title" class="col-sm-4 col-form-label">作品名<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    (日本語)
    [mwform_text name="作品名(日本語)" id="title-ja" size="30" placeholder="富山のガラス"]
    (英語)
    [mwform_text name="作品名(英語)" id="title-en" size="30" placeholder="Glass of Toyama"]
    ※日本語名と英名が同一の場合、両方の欄に同じ作品名をご記入下さい。
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="production-year" class="col-sm-4 col-form-label">制作年<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_select name="制作年" id="production-year" children=":2018,2019,2020" value="2019"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="techniques" class="col-sm-4 col-form-label">技法<span class="text-danger">（必須）<br>※複数選択可能</span></label>
  <div class="col-sm-8">
    [mwform_checkbox name="技法" id="techniques" children="blown,mold blown,hot sculpted,kiln cast,sand cast,pâte de verre,lost-wax process,laminate,lampworking,hot-worked,cold-worked,carved ,fused,slumped ,bending,glued,cut,grinding,sand blasting,polished,engraving,enameled,painted,acid-etching,assembled,mixed media,installation,media art,digital printing" post_raw="true" separator=","]

    技法その他<span class="text-danger">※選択式に当てはまらない場合のみ記入してください。</span>
    [mwform_textarea name="技法その他" id="other-technique" cols="60" rows="2" placeholder="video art, found object"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="materials" class="col-sm-4 col-form-label">素材<span class="text-danger">（必須）</span><br>※使用している素材すべて記入してください<br>※作品に動植物が関わる場合は、事前に事務局までご相談をお願いします。</label>
  <div class="col-sm-8">
    [mwform_textarea name="素材" id="materials" cols="60" rows="3"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="dimensions" class="col-sm-4 col-form-label">作品サイズ<span class="text-danger">（必須）</span><br>Ｈ（高さ）×Ｗ（幅）×Ｄ（奥行）cm
  </label>
  <div class="col-sm-8">
    Ｈ[mwform_number="高さ" id="dimension-h" min="0" max="240" step="1"] × Ｗ[mwform_number="幅" id="dimension-w" min="0" max="240" step="1"] × Ｄ[mwform_number="奥行" id="dimension-d" min="0" max="240" step="1"]cm
    ※必ずcmの単位を用いて記述してください。
    ※作品１点（組）につき、H×W×Dの合計は240cm以内とします。
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="weight" class="col-sm-4 col-form-label">重量<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    [mwform_number name="重量" id="weight" min="0" max="100" step="1"]kg ※最大重量は100kg以下とします。
    ※必ずkgの単位を用いて記述してください。
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="concept-ja" class="col-sm-4 col-form-label">作品の意図/コンセプト<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    <span class="text-danger">日本語※最大50文字以内（空欄は文字数に含みません。）</span>
    [mwform_textarea name="コンセプト（日本語）" id="concept-ja" cols="60" rows="3"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="concept-en" class="col-sm-4 col-form-label">作品の意図/コンセプト<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    <span class="text-danger">英語※最大150文字以内（空欄は文字数に含みません。）</span>
    [mwform_textarea name="コンセプト（英語）" id="concept-en" cols="60" rows="3"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="valuation" class="col-sm-4 col-form-label">作品評価額<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    ※展示や輸送時の保険額算定に使用します。評価額の限度額は1000000円とします。
    [mwform_number name="作品評価額" id="valuation" min="0" max="1000000" step="1"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="products" class="col-sm-4 col-form-label">作品1点につき、作品画像を3点添付してください<span class="text-danger">（必須）</span><br>画像はJPEG形式、2MB-10MB、300-350dpi、長辺は20cm程度としてください。<br>※2000×3000pixel程度<br>※ファイル名は氏名+作品名+番号（１-３）で記入してください。氏名及び作品名はアルファベットで記載をお願いします。作品画像の1、2、3は別アングルの画像を添付してください。</label>
  <div class="col-sm-8">
    JPEGデータ1 [mwform_image name="作品画像1" id="product1-pic-1"]

    JPEGデータ2 [mwform_image name="作品画像2" id="product1-pic-2"]

    JPEGデータ3 [mwform_image name="作品画像3" id="product1-pic-3"]

    本展に入選された場合、３点の画像のうち、１に付番された画像を図録や広報活動などで使用させていただきますので、画像の向きは正しく保存してください。誤った向きに保存されていることにより、正しく使用されなかったとしても実行委員会は責任を負いません。<br>映像作品については、作品の代表的なイメージとなる画像を添付してください。入選した場合は、発行する図録に画像を掲載します。
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="about-installation" class="col-sm-4 col-form-label">■インスタレーション作品について</label>
  <div class="col-sm-8">
    ・インスタレーション作品として出品する場合は、全体の様子が分る展示全体図（PDFファイル形式、Ａ４サイズ４枚程度）を添付してください。PDFファイルは、最小ファイルサイズ（2MB以内）にて保存したものとし、必ず拡張子（.pdf）がついているファイルを添付してください。<br>
    ・圧縮ツールによる圧縮やセキュリティ設定はしないでください。
    pdfデータ[mwform_file name="インスタレーション作品" id="installation"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="about-video" class="col-sm-4 col-form-label">■映像作品について<br>映像作品については、ガラスが主要な役割を果たしているもの又は、ガラスを用いたパフォーマンス作品に限ります。</label>
  <div class="col-sm-8">
    ・映像の長さは、1分以内とします。<br>
    ・映像は、You Tubeに「限定公開」設定で投稿し、URLを下記に入力してください。
    [mwform_url name="映像作品url" id="youtube-url" size="60"]
    ・２０２１年７月３０日までの間は、閲覧およびデータ取得可能な状態にしてください。<br>
    ・アップロードする容量は、アップロード先の規定に従ってください。ただし、データ形式については、movもしくは、mp4形式にしてください。
  </div>
</div>

&nbsp;

<div class="form-group row no-gutters">
  <label for="title" class="col-sm-4 col-form-label">作品名（2点目用）</label>
  <div class="col-sm-8">
    (日本語)
    [mwform_text name="作品名(日本語)_2" id="title-ja_2" size="30" placeholder="富山のガラス"]
    (英語)
    [mwform_text name="作品名(英語)_2" id="title-en_2" size="30" placeholder="Glass of Toyama"]
    ※日本語名と英名が同一の場合、両方の欄に同じ作品名をご記入下さい。
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="production-year" class="col-sm-4 col-form-label">制作年（2点目用）</label>
  <div class="col-sm-8">
    [mwform_select name="制作年_2" id="production-year_2" children=",2018,2019,2020"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="techniques" class="col-sm-4 col-form-label">技法（2点目用）<span class="text-danger"><br>※複数選択可能</span></label>
  <div class="col-sm-8">
    [mwform_checkbox name="技法_2" id="techniques_2" children="blown,mold blown,hot sculpted,kiln cast,sand cast,pâte de verre,lost-wax process,laminate,lampworking,hot-worked,cold-worked,carved ,fused,slumped ,bending,glued,cut,grinding,sand blasting,polished,engraving,enameled,painted,acid-etching,assembled,mixed media,installation,media art,digital printing" post_raw="true" separator=","]

    技法その他<span class="text-danger">※選択式に当てはまらない場合のみ記入してください。</span>
    [mwform_textarea name="技法その他_2" id="other-technique_2" cols="60" rows="2" placeholder="video art, found object"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="materials" class="col-sm-4 col-form-label">素材（2点目用）<br>※使用している素材すべて記入してください<br>※作品に動植物が関わる場合は、事前に事務局までご相談をお願いします。</label>
  <div class="col-sm-8">
    [mwform_textarea name="素材_2" id="materials_2" cols="60" rows="3"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="dimensions" class="col-sm-4 col-form-label">作品サイズ（2点目用）<br>Ｈ（高さ）×Ｗ（幅）×Ｄ（奥行）cm
  </label>
  <div class="col-sm-8">
    Ｈ[mwform_number="高さ_2" id="dimension-h_2" min="0" max="240" step="1"] × Ｗ[mwform_number="幅_2 id="dimension-w_2" min="0" max="240" step="1"] × Ｄ[mwform_number="奥行_2" id="dimension-d_2" min="0" max="240" step="1"]cm
    ※必ずcmの単位を用いて記述してください。
    ※作品１点（組）につき、H×W×Dの合計は240cm以内とします。
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="weight" class="col-sm-4 col-form-label">重量（2点目用）</label>
  <div class="col-sm-8">
    [mwform_number name="重量_2" id="weight_2" min="0" max="100" step="1"]kg ※最大重量は100kg以下とします。
    ※必ずkgの単位を用いて記述してください。
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="concept-ja" class="col-sm-4 col-form-label">作品の意図/コンセプト（2点目用）</label>
  <div class="col-sm-8">
    <span class="text-danger">日本語※最大50文字以内（空欄は文字数に含みません。）</span>
    [mwform_textarea name="コンセプト（日本語）_2" id="concept-ja_2" cols="60" rows="3"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="concept-en" class="col-sm-4 col-form-label">作品の意図/コンセプト（2点目用）</label>
  <div class="col-sm-8">
    <span class="text-danger">英語※最大150文字以内（空欄は文字数に含みません。）</span>
    [mwform_textarea name="コンセプト（英語）_2" id="concept-en_2" cols="60" rows="3"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="valuation" class="col-sm-4 col-form-label">作品評価額（2点目用）</label>
  <div class="col-sm-8">
    ※展示や輸送時の保険額算定に使用します。評価額の限度額は1000000円とします。
    [mwform_number name="作品評価額_2" id="valuation_2" min="0" max="1000000" step="1"]
  </div>
</div>
&nbsp;

<div class="form-group row no-gutters">
  <label for="products" class="col-sm-4 col-form-label">作品1点につき、作品画像を3点添付してください（2点目用）<br>画像はJPEG形式、2MB-10MB、300-350dpi、長辺は20cm程度としてください。<br>※2000×3000pixel程度<br>※ファイル名は氏名+作品名+番号（１-３）で記入してください。氏名及び作品名はアルファベットで記載をお願いします。作品画像の1、2、3は別アングルの画像を添付してください。</label>
  <div class="col-sm-8">
    JPEGデータ1 [mwform_image name="作品画像1_2" id="product1-pic-1_2"]

    JPEGデータ2 [mwform_image name="作品画像2_2" id="product1-pic-2_2"]

    JPEGデータ3 [mwform_image name="作品画像3_2" id="product1-pic-3_2"]

    本展に入選された場合、３点の画像のうち、１に付番された画像を図録や広報活動などで使用させていただきますので、画像の向きは正しく保存してください。誤った向きに保存されていることにより、正しく使用されなかったとしても実行委員会は責任を負いません。<br>映像作品については、作品の代表的なイメージとなる画像を添付してください。入選した場合は、発行する図録に画像を掲載します。
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="about-installation" class="col-sm-4 col-form-label">■インスタレーション作品について（2点目用）</label>
  <div class="col-sm-8">
    ・インスタレーション作品として出品する場合は、全体の様子が分る展示全体図（PDFファイル形式、Ａ４サイズ４枚程度）を添付してください。PDFファイルは、最小ファイルサイズ（2MB以内）にて保存したものとし、必ず拡張子（.pdf）がついているファイルを添付してください。<br>
    ・圧縮ツールによる圧縮やセキュリティ設定はしないでください。
    pdfデータ[mwform_file name="インスタレーション作品_2" id="installation_2"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="about-video" class="col-sm-4 col-form-label">■映像作品について（2点目用）<br>映像作品については、ガラスが主要な役割を果たしているもの又は、ガラスを用いたパフォーマンス作品に限ります。</label>
  <div class="col-sm-8">
    ・映像の長さは、1分以内とします。<br>
    ・映像は、You Tubeに「限定公開」設定で投稿し、URLを下記に入力してください。
    [mwform_url name="映像作品url_2" id="youtube-url_2" size="60"]
    ・２０２１年７月３０日までの間は、閲覧およびデータ取得可能な状態にしてください。<br>
    ・アップロードする容量は、アップロード先の規定に従ってください。ただし、データ形式については、movもしくは、mp4形式にしてください。
  </div>
</div>

&nbsp;

<div class="form-group row no-gutters">
  <label for="infomation-souces" class="col-sm-4 col-form-label">普段、美術に関する情報や展覧会情報を得ているものをチェックしてください。</label>
  <div class="col-sm-8">
    [mwform_checkbox name="情報元" id="infomation-souces" children="ウェブサイト,テレビ,ラジオ,雑誌,新聞,SNS,アプリ,募集チラシ・ポスター,知人から,その他" separator=","]

    差し支えなければ、具体的な名称を入力してください。
    [mwform_text name="情報元の名称" id="source-name" size="60" placeholder="インスタグラム、○○マガジン、公募展ウェブサイト○○"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="publication" class="col-sm-4 col-form-label">応募作品の公表について<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    様々な広告媒体にて出品された作品を公表します。ご了承ください。
    [mwform_checkbox name="公表の同意" id="publication" children="同意する" separator=","]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="right" class="col-sm-4 col-form-label">作品の権利について<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    募集要項中の知的財産権の取り扱い（出品作品の管理）をご確認いただき、ご了承ください。<br>応募者は、応募作品の著作権及び所有権を有し、応募作品が、第三者の著作権ならびに知的財産権を侵害しないこと、作品中に使用されるマーク、美術、映画、写真、映像、プログラムおよび音楽等については、必ず知的財産権者の許諾を得た上で応募してください。第三者からの権利侵害、損害賠償等の主張がなされたとしても、応募者が自らの責任で対処することとし、主催者は一切の責任を負いません。
    [mwform_checkbox name="権利の同意" id="right" children="同意する" separator=","]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="personal-information" class="col-sm-4 col-form-label">個人情報の取り扱いへの同意<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    応募者の個人情報は、本展覧会に関する業務（運営上の連絡、審査結果の発表、資料等の発送、統計処理、作品の返却、次回展覧会の広報等）の為に利用します。ご了承ください。
    [mwform_checkbox name="個人情報の同意" id="personal-information" children="同意する" separator=","]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="guidelines-check" class="col-sm-4 col-form-label">募集要項の確認<span class="text-danger">（必須）</span></label>
  <div class="col-sm-8">
    応募に際して、募集要項を熟読し、内容について確認をしましたか。
    [mwform_checkbox name="募集要項の確認" id="guidelines-check" children="はい" separator=","]
  </div>
</div>

&nbsp;
&nbsp;

[mwform_submitButton name="submit" confirm_value="確認画面へ" submit_value="送信する"]

[mwform_backButton value="戻る"]









＋3：完全に当てはまる
＋2：かなり当てはまる
＋1：少し当てはまる
－1：あまり当てはまらない
－2：ほとんど当てはまらない
－3：全く当てはまらない
1．ほとんどの人は．私よりもはっきり積極的にものを言っていると思う。＊
2.  私は，恥ずかしがりでデートに誘われたり誘ったりすることをためらうことがある。＊
3. レストランで注文した料理に満足できない時、ウェイター〔ウエイトレス）に文句を言う。
4. 自分の気持ちが傷つけられたとしても，相手の気持ちを傷つけないように配慮する方だ。＊
5. セールスマンが気に入らない商品を勧めてきた時でも「いらない」と断ることができない。＊
6．頼まれごとをする時は，理由は必ず聞くようにしている。
7．私は活発な議論を好む時がある。
8．私はいつも人より一歩先んじようと努力している。
9．正直なところ人は，私をいつも利用していると思う。＊
10. 私は、初めて会った人でも話しかけて会話を楽しむ方だ。
11. 私は、魅力的な異性と出会った時，何をいってよいかわからなくなることがある。＊
12．必要があっても，会社や施設に電話をするのをためらう方だ。＊
13．私は就職や入学の問い合わせをするとき，直接窓口へ行かずむしろメールで問い合わせる方だ。＊
14．私は、買った商品を返品するのは恥ずかしいことだと思う。＊
15．親しくしている親戚が自分を困らせることがあった時、そのことをはっきりと伝えるよりも、気持ちをおさえようとする方だ。＊
16．私はばかな人だと思われたくないので、質問はなるべくしないようにしている。＊
17．人と議論している時、あまりにも興奮しすぎて怒り出してしまうのではないかと時々思う。＊
18．著名な人が講演（講義）で間違ったことを言ったと思う時、皆の前で自分の意見を述べたいと思う。
19.  物を買うときに、値段の交渉はなるべく避けるようにしている。＊
20. 自分が重要な、もしくは価値のあることをする時、そのことを他の人も知ってほしいと思う。21. 自分の気持ちを率直に表現する方だ。
22. 誰かが自分の悪いうわさ話を広めようとしていた時、できるだけ早く直接本人と会ってそのことを話し合おうとする。
23. 私は「ノー」とはっきり断れない。＊
24. 私は自分の気持ちを大げさに表現するよりも、ため込んでがまんする方だ。＊
25．レストランでもどこでも、サービスが悪い時は、文句を言う方だ。
26. 人にほめられた時、その場でどう答えたらよいかわからなくなる。＊
27．映画館や講義の最中に、自分の近くでカップルが大きな声で話をしていたら、静かにするよう、もしくは他の場所で話をするよう伝える。
28．1列に並んで順番待ちをしている時、自分の前に誰かが割り込もうとしたら厳しく注意する。
29．私は自分の意見をすぐに伝える方だ。
30．全く何も言えなくなることが時々ある。＊



【テスト：管理者宛】これは投稿フォームのサンプルです

参加者区分：{参加者区分}
お名前：{姓}{名}
ふりがな：{せい}{めい}
英文表記：{姓(英文)}{名(英文)}
グループ名：{グループ名}
生年月日：{"生年月日}
性別：{性別}
郵便番号：{zipcode}
都道府県：{都道府県}{市区町村}{地番、マンション、ビル、方書等}
電話番号：{電話番号}
メールアドレス：{email}

作品応募点数：{作品応募点数}

1点目
作品名：{作品名(日本語)}
作品名(英語){作品名(英語)}
制作年：{制作年}
技法：{技法}
技法その他：{技法その他}
素材：{素材}
高さ：{高さ}
幅：{幅}
奥行：{奥行}
重量：{重量}
コンセプト（日本語）：{コンセプト（日本語）}
コンセプト（英語）：{コンセプト（英語）}
作品評価額：{作品評価額}
作品画像1：{作品画像1}
作品画像2：{作品画像2}
作品画像3：{作品画像3}
インスタレーション作品：{インスタレーション作品}
映像作品url：{映像作品url}

2点目
作品名：{作品名(日本語)_2}
作品名(英語){作品名(英語)_2}
制作年：{制作年_2}
技法：{技法_2}
技法その他：{技法その他_2}
素材：{素材_2}
高さ：{高さ_2}
幅：{幅_2}
奥行：{奥行_2}
重量：{重量_2}
コンセプト（日本語）：{コンセプト（日本語）_2}
コンセプト（英語）：{コンセプト（英語）_2}
作品評価額：{作品評価額_2}
作品画像1：{作品画像1_2}
作品画像2：{作品画像2_2}
作品画像3：{作品画像3_2}
インスタレーション作品：{インスタレーション作品_2}
映像作品url：{映像作品url_2}


普段、情報を得ているもの：{情報元}
具体的な名称：{情報元の名称}



<div class="form-group row no-gutters">
    <label class="col-sm-4 col-form-label" for="inputName">
        Applicant Category <span class="text-danger"> (Required)</span>
    </label>
    <div class="col-sm-10">
        [mwform_radio name="Applicant" id="guest-class" children="Individual,Group/Organization"]
    </div>
</div>
<div class="form-group row no-gutters">
    
    <label class="col-sm-4 col-form-label" for="inputGroup">Group Name (for a group or an organization applicant) </label>
    <div class="col-sm-4"><label for="group"></label>
        [mwform_text name="group_category" id="group" size="30" placeholder="Toyama Kirari Studio"]</div>
    </div>
*For those applying as a group/organization, the information below pertains to the representative of the group/organization. 
<div class="form-group row no-gutters">
    <label for="inputName" class="col-sm-4 col-form-label">Name<span class="text-danger"> (Required)</span></label>
    <div class="col-sm-4">
        First [mwform_text name="First" id="guest-sei" size="30" placeholder="Taro"]
    </div>
    <div class="col-sm-4">
        Last [mwform_text name="Last" id="guest-mei" size="30" placeholder="Yamada"]
    </div>
</div>

<div class="form-group row no-gutters">
    <label for="inputBirthday" class="col-sm-4 col-form-label">Date of Birth <span class="text-danger"> (Required)</span></label>
    <div class="col-sm-4">
        [mwform_datepicker name="Date/Month/Year" id="birthday" size="30" js="minDate:'-100y',yearRange:'-100:-10',showMonthAfterYear:'true',changeYear:'true',changeMonth:'true'" ]
    </div>
</div>
<div class="form-group row no-gutters">
    <label for="inputSex" class="col-sm-4 col-form-label">Sex<span class="text-danger"> (Required)</span></label>
    <div class="col-sm-8">
        [mwform_select name="Sex" id="sexCode" children="Male,Female,Other,N/A"]
    </div>
</div>

<h4>Address</h4>
<div class="form-group row no-gutters">
    <label for="build-input" class="col-sm-4 col-form-label">Bldg. / Floor</label>
    <div class="col-sm-8">
        [mwform_text name="Bldg./Floor" id="build-input" size="30" placeholder="Toyama Kirari 2F"]
    </div>
</div>
<div class="form-group row no-gutters">
    <label for="city-input" class="col-sm-4 col-form-label">Street, Bldg. Name/Apartment #, Post Office box, City/Town <span class="text-danger"> (Required)</span></label>
    <div class="col-sm-8">
        [mwform_text name="City/Town" id="city-input" size="30" placeholder="5-1 Nishicho"]
    </div>
</div>
<div class="form-group row no-gutters">
    <label for="prefSelect" class="col-sm-4 col-form-label">State/County<span class="text-danger"> (Required)</span></label>
    <div class="col-sm-8">
        [mwform_text name="State/County" id="State" size="30" placeholder="Toyama Prefecture"]
    </div>
</div>
<div class="form-group row no-gutters">
    <label for="zipcode" class="col-sm-4 col-form-label">Zip/Postal code<span class="text-danger"> (Required)</span></label>
    <div class="col-sm-8">
        [mwform_text name="Zipcode" id="zipcode" size="30" placeholder="9300062"]
    </div>
</div>

<div class="form-group row no-gutters">
    <label for="prefSelect" class="col-sm-4 col-form-label">Country<span class="text-danger"> (Required)</span></label>
    <div class="col-sm-8">
        [mwform_text name="Country" id="State" size="30" placeholder="Japan"]
    </div>
</div>
<div class="form-group row no-gutters">
    <label for="tel" class="col-sm-4 col-form-label">Daytime Telephone Number (with country code) <span class="text-danger"> (Required)</span></label>
    <div class="col-sm-8">
      [mwform_tel name="Telephone" id="tel"]
    </div>
</div>

<div class="form-group row no-gutters">
    <label for="email" class="col-sm-4 col-form-label">E-mail address<span class="text-danger"> (Required)</span></label>
    <div class="col-sm-8">
        [mwform_email name="Email" id="email" size="60" placeholder="aaaaaaaaaaaaaa@.co.jp"]
    </div>
</div>
<div class="form-group row no-gutters">
    <label for="emailconfirm" class="col-sm-4 col-form-label">E-mail address confirmation<span class="text-danger"> (Required)</span></label>
    <div class="col-sm-8">
        [mwform_email name="Emailconfirm" id="emailconfirm" size="60" placeholder="Taaaaaaaaaaaaaa@.co.jp"] (Re-enter your e-mail address to confirm it.)  
    </div>
</div>


<h4>About Your Works</h4>
<div class="form-group row no-gutters">
  <label for="number-of-works" class="col-sm-4 col-form-label">Number of works submitted <span class="text-danger">(1 or 2)</span></label>
  <div class="col-sm-8">
    [mwform_select name="Number of works" id="number-of-works" children="1,2"]
  </div>
</div>
(If two works, submit information about the work for both)

<div class="form-group row no-gutters">
  <label for="title" class="col-sm-4 col-form-label">Title<span class="text-danger">(Required)</span></label>
  <div class="col-sm-8">
    [mwform_text name="Title1" id="title-en" size="30" placeholder="Glass of Toyama"]
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="production-year" class="col-sm-4 col-form-label">Production year<span class="text-danger">(Required)</span></label>
  <div class="col-sm-8">
    [mwform_select name="Production year1" id="production-year" children=":2018,2019,2020" value="2019"]
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="techniques" class="col-sm-4 col-form-label">Techniques<span class="text-danger">(Required)<br>*Check as many as apply</span></label>
  <div class="col-sm-8">
    [mwform_checkbox name="Techniques1" id="techniques" children="blown,mold blown,hot sculpted,kiln cast,sand cast,pâte de verre,lost-wax process,laminate,lampworking,hot-worked,cold-worked,carved ,fused,slumped ,bending,glued,cut,grinding,sand blasting,polished,engraving,enameled,painted,acid-etching,assembled,mixed media,installation,media art,digital printing" post_raw="true" separator=","]
    Other Techniques<br><span class="text-danger">*If not included in list above, describe below.</span>
    [mwform_textarea name="Other Techniques1" id="other-technique" cols="60" rows="2" placeholder="video art, found object"]
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="materials" class="col-sm-4 col-form-label">Materials<span class="text-danger">(Required)<br>* If the work deals involves animals and/or plants, please consult the secretariat beforehand.
</span></label>
  <div class="col-sm-8">
    [mwform_textarea name="Materials1" id="materials" cols="60" rows="5" placeholder="Stone, Glass, Concrete"]
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="dimensions" class="col-sm-4 col-form-label">Dimensions<span class="text-danger">(Required)</span><br>H (height)× W (width)× D (depth)cm
  </label>
  <div class="col-sm-8">
    Ｈ[mwform_number name="Height1" id="dimension-h" min="0" max="240" step="1" placeholder="30 "] × Ｗ[mwform_number name="Width1" id="dimension-w" min="0" max="240" step="1" placeholder="30 "] × Ｄ[mwform_number name="Depth1" id="dimension-d" min="0" max="240" step="1" placeholder="30"]cm
    * Total of H, W, and D must not exceed 240 cm.<br>
    * If the work is an installation, the floor area and height must not be exceed 9㎡ and 3.3 m respectively.
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="wight" class="col-sm-4 col-form-label">Weight<span class="text-danger">(Required)</span></label>
  <div class="col-sm-8">
    [mwform_number name="Weight1" id="weight" min="0" max="100" step="1" placeholder="30"]kg ※Maximum weight 100 kg (220 lb).  
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="valuation" class="col-sm-4 col-form-label">Value of the work<span class="text-danger">(Required)</span></label>
  <div class="col-sm-8">
      [mwform_number name="Valuation1" id="valuation" min="0" max="1000000" step="1"]
      *This figure is used for calculating the insurance value.<br>
      *The maximum value must not exceed 1,000,000 JPY.<br>
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="concept-en" class="col-sm-4 col-form-label">Inspiration/Idea/Concept<br><span class="text-danger">(Required)<br>*No more than 150 characters including punctuation.</span></label>
  <div class="col-sm-8">
    [mwform_textarea name="Concept-en1" id="concept-en" cols="60" rows="5"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="products" class="col-sm-4 col-form-label">Please upload 3 digital images of the submitted work taken from different angles.<span class="text-danger">(Required)<br>*All the digital images must be in JPEG format (2MB – 10MB, 300-350dpi, longest side should be about 20 cm *approximately 2000×3000 pixels).  
    <br>*File names of the digital images must use the following format: your name + title of work + number (01, 02 or 03). The 01 digital image of all finalists’ works will be used in the exhibition catalogue.
    <br>Make sure to include your name and the title of the work in English.</span>
</label>
  <div class="col-sm-8">
    Digital image 01: [mwform_image name="Product1-1" id="product1-pic-1"]
    Digital image 02: [mwform_image name="Product1-2" id="product1-pic-2"]
    Digital image 03: [mwform_image name="Product1-3" id="product1-pic-3"]
    *If your work is selected, the 01 image out of the three submitted images will be used in the catalogue and related activities, including press relations. When you save the digital image, please make sure that the up-down and left-right orientation is correct. The executive committee will not be held responsible for orientation errors.<br>*For video works, please attach images that accurately represent the contents of the video. If the work is selected, the attached images will be printed in the catalogue.
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="about-installation" class="col-sm-4 col-form-label">■Installation works</label>
  <div class="col-sm-8">
    ＊If you are applying with an installation, please attach images that show the whole of the installation (PDF format, about 4 pages of A4 size). 
    <br>＊Please save the PDF using minimum size (within 2MB), and make sure that the file is suffixed with the .pdf filename extension.<br>＊Please do not compress files or set file security.
    pdf data[mwform_file name="About-installation1" id="installation"]
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="about-video" class="col-sm-4 col-form-label">■Video works</label>
  <div class="col-sm-8">
    *Video works are limited to those in which glass plays the major role or performance pieces using glass.<br>
    *The length of the video must be no more than one minute.<br>*Please upload your work on YouTube (video sharing site, www.youtube.com), with for “unlisted” use as the privacy setting, and please write down the URL below.
    [mwform_url name="Video_url1" id="youtube-url" size="60"]
    *Please make it viewable and data-obtainable until July 30, 2021. <br>
    *As for the volume of the data to be uploaded, please follow restrictions of the application you use. The data format must be either mov or mp4.
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="title" class="col-sm-4 col-form-label">Title_2</label>
  <div class="col-sm-8">
    [mwform_text name="Title2" id="title-en_2" size="30" placeholder="Glass of Toyama"]
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="production-year" class="col-sm-4 col-form-label">Production year_2</label>
  <div class="col-sm-8">
    [mwform_select name="Production year2" id="production-year_2" children=":2018,2019,2020" value="2019"]
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="techniques" class="col-sm-4 col-form-label">Techniques_2<span class="text-danger"><br>*Check as many as apply</span></label>
  <div class="col-sm-8">
    [mwform_checkbox name="Techniques2" id="techniques_2" children="blown,mold blown,hot sculpted,kiln cast,sand cast,pâte de verre,lost-wax process,laminate,lampworking,hot-worked,cold-worked,carved ,fused,slumped ,bending,glued,cut,grinding,sand blasting,polished,engraving,enameled,painted,acid-etching,assembled,mixed media,installation,media art,digital printing" post_raw="true" separator=","]
    Other Techniques_2<br><span class="text-danger">*If not included in list above, describe below.</span>
    [mwform_textarea name="Other Techniques2" id="other-technique_2" cols="60" rows="2" placeholder="video art, found object"]
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="materials" class="col-sm-4 col-form-label">Materials_2<br><span class="text-danger">* If the work deals involves animals and/or plants, please consult the secretariat beforehand.
</span></label>
  <div class="col-sm-8">
    [mwform_textarea name="Materials2" id="materials_2" cols="60" rows="5" placeholder="Stone, Glass, Concrete"]
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="dimensions" class="col-sm-4 col-form-label">Dimensions_2<br>H (height)× W (width)× D (depth)cm
  </label>
  <div class="col-sm-8">
    Ｈ[mwform_number name="Height2" id="dimension-h_2" min="0" max="240" step="1" placeholder="30 "] × Ｗ[mwform_number name="Width2" id="dimension-w_2" min="0" max="240" step="1" placeholder="30 "] × Ｄ[mwform_number name="Depth2" id="dimension-d_2" min="0" max="240" step="1" placeholder="30"]cm
    * Total of H, W, and D must not exceed 240 cm.<br>
    * If the work is an installation, the floor area and height must not be exceed 9㎡ and 3.3 m respectively.
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="wight" class="col-sm-4 col-form-label">Weight_2</label>
  <div class="col-sm-8">
    [mwform_number name="Weight2" id="weight_2" min="0" max="100" step="1" placeholder="30"]kg ※Maximum weight 100 kg (220 lb).  
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="valuation" class="col-sm-4 col-form-label">Value of the work_2</label>
  <div class="col-sm-8">
      [mwform_number name="Valuation2" id="valuation" min="0" max="1000000" step="1"]
      *This figure is used for calculating the insurance value.<br>
      *The maximum value must not exceed 1,000,000 JPY.<br>
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="concept-en" class="col-sm-4 col-form-label">Inspiration/Idea/Concept_2<span class="text-danger"><br>*No more than 150 characters including punctuation.</span></label>
  <div class="col-sm-8">
    [mwform_textarea name="Concept-en2" id="concept-en_2" cols="60" rows="5"]
  </div>
</div>

<div class="form-group row no-gutters">
  <label for="products" class="col-sm-4 col-form-label">Please upload 3 digital images of the submitted work taken from different angles.<span class="text-danger"><br>*All the digital images must be in JPEG format (2MB – 10MB, 300-350dpi, longest side should be about 20 cm *approximately 2000×3000 pixels).  
    <br>*File names of the digital images must use the following format: your name + title of work + number (01, 02 or 03). The 01 digital image of all finalists’ works will be used in the exhibition catalogue.
    <br>Make sure to include your name and the title of the work in English.</span>
</label>
  <div class="col-sm-8">
    Digital image_2 01: [mwform_image name="Product2-1" id="product1-pic-1_2"]
    Digital image_2 02: [mwform_image name="Product2-2" id="product1-pic-2_2"]
    Digital image_2 03: [mwform_image name="Product2-3" id="product1-pic-3_2"]
    *If your work is selected, the 01 image out of the three submitted images will be used in the catalogue and related activities, including press relations. When you save the digital image, please make sure that the up-down and left-right orientation is correct. The executive committee will not be held responsible for orientation errors.<br>*For video works, please attach images that accurately represent the contents of the video. If the work is selected, the attached images will be printed in the catalogue.
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="about-installation" class="col-sm-4 col-form-label">■Installation works_2</label>
  <div class="col-sm-8">
    ＊If you are applying with an installation, please attach images that show the whole of the installation (PDF format, about 4 pages of A4 size). 
    <br>＊Please save the PDF using minimum size (within 2MB), and make sure that the file is suffixed with the .pdf filename extension.<br>＊Please do not compress files or set file security.
    pdf data[mwform_file name="About-installation2" id="installation_2"]
  </div>
</div>
<div class="form-group row no-gutters">
  <label for="about-video" class="col-sm-4 col-form-label">■Video works_2</label>
  <div class="col-sm-8">
    *Video works are limited to those in which glass plays the major role or performance pieces using glass.<br>
    *The length of the video must be no more than one minute.<br>*Please upload your work on YouTube (video sharing site, www.youtube.com), with for “unlisted” use as the privacy setting, and please write down the URL below.
    [mwform_url name="Video_url2" id="youtube-url_2" size="60"]
    *Please make it viewable and data-obtainable until July 30, 2021. <br>
    *As for the volume of the data to be uploaded, please follow restrictions of the application you use. The data format must be either mov or mp4.
  </div>
</div>


<div class="form-group row no-gutters">
    <label for="infomation-souces" class="col-sm-4 col-form-label">Which of the following would normally be your sources of information about art and art exhibitions? </label>
    <div class="col-sm-8">
      [mwform_checkbox name="Infomation-souces" id="infomation-souces" children="Website,TV,Radio,Magazine,Newspaper,Social Media,App,Poster ore leaflet,Friend,Other" separator=","]
      Please provide further information about your sources below.
      [mwform_text name="Infomation-souces_name" id="source-name" size="60" placeholder="_______ on Instagram、_______ magazine、website for _____________  open-submission competition "]
    </div>
  </div>
  <div class="form-group row no-gutters">
    <label for="publication" class="col-sm-4 col-form-label">Publication of Submitted Work<span class="text-danger">(Required)</span></label>
    <div class="col-sm-8">
        The submitted work may be published in various media. Please indicate here that you agree.
      [mwform_checkbox name="Agree1" id="publication" children="I agree." separator=","]
    </div>
  </div>
  <div class="form-group row no-gutters">
    <label for="right" class="col-sm-4 col-form-label">Use of Intellectual Property Rights<span class="text-danger">(Required)</span></label>
    <div class="col-sm-8">
        Please review the use of intellectual property rights in the application guidelines and indicate here that you agree. The submitted work must not infringe on any third party’s intellectual property right and/or copyright. The applicant must obtain permission from the owner(s) of the intellectual property to use a logo, symbol, art, film, photograph, video, program, music, etc., before submitting the work. If a third party should claim infringement of the right and/or demand compensation, the applicant will be solely responsible. The sponsors of this exhibition are excluded from any liability.
      [mwform_checkbox name="Agree2" id="rights" children="I agree." separator=","]
    </div>
  </div>
  <div class="form-group row no-gutters">
    <label for="personal-information" class="col-sm-4 col-form-label">Consent for Handling of Personal Information<span class="text-danger">(Required)</span></label>
    <div class="col-sm-8">
        Personal information provided by applicants shall be used for purposes related to this exhibition (e.g., communications needed for operations, announcements of judging results, shipping of documents, return of works, communicating information about the exhibition, statistical work and so on). <br>Please indicate here that you agree.
      [mwform_checkbox name="Agree3" id="personal-information" children="I agree." separator=","]
    </div>
  </div>
  <div class="form-group row no-gutters">
    <label for="guidelines-check" class="col-sm-4 col-form-label">Having read the application guidelines carefully, do you accept the guidelines?<span class="text-danger">(Required)</span></label>
    <div class="col-sm-8">
      [mwform_checkbox name="Agree4" id="guidelines-check" children="Yes I do." separator=","]
    </div>
  </div>
  &nbsp;
  &nbsp;
  [mwform_submitButton name="submit" confirm_value="確認画面へ" submit_value="送信する"]
  [mwform_backButton value="戻る"]


  解決済み
・最下部の4つのチェック項目で、バリデーションをまとめていたため、一つでもチェックが入っていれば通ってしまっていた（島崎さんと同様）
・email確認のバリデーションチェックが外れていたため修正
・一部項目が返信メールに反映されなかった→フォームタグnameの空白や/で分けられている部分を_に修正し解決
・Zipcode
おそらく国際郵便番号は最大9桁だがバリデーション設定の郵便番号にチェックすると6桁以上がはじかれる
→郵便番号のチェックを外し最大文字数9桁に設定

未解決
・半角英数字のチェックはいれるべきでしょうか?
全体の日本語入力を防止するため半角英数字にチェックをいれると
記号や空白もはじいてしまうようです

現在ひとまず全てから半角英数字のチェックは外しているので
記号空白と全角ひらがななども入力できる状態となっています

Telephone
再度確認したところやはりきちんと動作していなかったようです
すみません
長いので分けます

バリデーション設定の電話番号にチェックすると10桁以上はじかれる
→バリデーション設定の電話番号のチェックを外すと13文字まで入力できますが文字入力も許可されてしまう
→バリデーション設定の半角数字だけをチェックすると数字を入力してもはじかれる
どうすべきでしょうか?
mwform_telをmwform_textに変えて
半角数字チェックの文字数を15?桁だけ指定などでも[-]は入れられなさそうですが
一応回避はできる気はします
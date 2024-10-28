from django.db import models
from django.utils import timezone
from django.core.validators import MinValueValidator, MaxValueValidator

class Project(models.Model):
    name = models.CharField("案件名", max_length=200)
    description = models.TextField("案件詳細")
    tech_stack = models.CharField("技術スタック", max_length=200, null=True, blank=True)
    address = models.CharField("勤務地", max_length=100, null=True, blank=True)
    is_telework = models.BooleanField("テレワーク有", default=False)
    impressions = models.TextField("面談後所感", null=True, blank=True)
    status = models.CharField("状態", max_length=20, choices=[
        ('offering', '営業中'),
        ('interview', '面談待ち'),
        ('waiting', '結果待ち'),
        ('rejection', '落選'),
        ('decline', '辞退'),
        ('success', '採用確定'),
    ], default='proposal')
    created_at = models.DateTimeField("作成日時", auto_now_add=True)  # 案件追加日時

    # 案件合致度（業務内容）
    content_match = models.IntegerField(
        validators=[MinValueValidator(1), MaxValueValidator(5)],
        null=True,
        blank=True,
        verbose_name="業務内容合致度"
    )

    # 案件合致度（就業環境）
    environment_match = models.IntegerField(
        validators=[MinValueValidator(1), MaxValueValidator(5)],
        null=True,
        blank=True,
        verbose_name="就業環境合致度"
    )

    def __str__(self):
        return self.name
    
    @property
    def status_choices(self):
        return self._meta.get_field('status').choices

    @property
    def time_since_created(self):
        now = timezone.now()
        diff = now - self.created_at

        if diff.days > 0:
            return f"{diff.days}日前"
        else:
            hours = diff.seconds // 3600
            if hours > 0:
                return f"{hours}時間前"
            else:
                minutes = diff.seconds // 60
                return f"{minutes}分前"



# class ProjectAssignment(models.Model):
#     project = models.ForeignKey(Project, on_delete=models.CASCADE) # プロジェクトへの外部キー
#     engineer = models.ForeignKey('accounts.Engineer', on_delete=models.CASCADE) # エンジニアへの外部キー
#     role = models.CharField(max_length=100) # プロジェクトでの役割
#     start_date = models.DateField() # アサイン開始日
#     end_date = models.DateField(null=True, blank=True) # アサイン終了日（オプション）

#     class Meta:
#         unique_together = ('project', 'engineer') # プロジェクトとエンジニアの組み合わせはユニークであることを保証

#     def __str__(self):
#         return f"{self.engineer.user.username} on {self.project.name}"
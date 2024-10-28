from django import forms
from .models import Project

class ProjectForm(forms.ModelForm):
    class Meta:
        model = Project
        fields = [
            'name',
            'description',
            'tech_stack',
            'impressions',
            'address',
            'is_telework',
            'status',
            ]
        widgets = {
            'is_telework': forms.CheckboxInput(),
            'description': forms.Textarea(attrs={'rows': 5}),
            'impressions': forms.Textarea(attrs={'rows': 5}),
        }
        labels = {
            'name':'案件名',
            'description':'案件詳細',
            'tech_stack':'技術スタック',
            'impressions':'面談後所感',
            'address':'勤務地',
            'is_telework':'テレワーク有',
            'status':'状態',
        }
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        if not self.instance.pk:  # 新規作成の場合
            self.fields['status'].initial = 'proposal'

class ProjectStatusForm(forms.ModelForm):
    class Meta:
        model = Project
        fields = ['status']
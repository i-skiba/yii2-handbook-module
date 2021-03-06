<?php

use kamaelkz\yii2admin\v1\widgets\formelements\editors\froala\FroalaEditor;
use mihaildev\ckeditor\CKEditor;
use concepture\yii2logic\enum\EditorTypeEnum;

?>

<?php if (isset(Yii::$app->params['concepture']['editor']['type']) && Yii::$app->params['concepture']['editor']['type'] === EditorTypeEnum::CKE):?>

    <?= $form->field($model, $attribute)->widget(CKEditor::className(),[
            'editorOptions' => [
                'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
                'allowedContent' => true,
            ],
        ])
        ->label($label ?? $model->getAttributeLabel($attribute))
        ->hint($hint ?? null);
    ?>

<?php else: ?>

    <?= $form
        ->field($model, $attribute)
        ->widget(FroalaEditor::class, [
            'model' => $model,
            'attribute' => $attribute,
            'clientOptions' => [
                'attribution' => false,
                'heightMin' => 200,
                'toolbarSticky' => true,
                'toolbarInline'=> false,
                'theme' =>'royal', //optional: dark, red, gray, royal
                'language' => Yii::$app->language,
                'quickInsertTags' => [],
            ]
        ])
        ->label($label ?? $model->getAttributeLabel($attribute))
        ->hint($hint ?? null);
    ?>

<?php endif;?>


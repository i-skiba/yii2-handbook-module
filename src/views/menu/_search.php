<?php

use concepture\yii2handbook\enum\MenuEnum;
use concepture\yii2logic\enum\StatusEnum;
use concepture\yii2logic\enum\IsDeletedEnum;

?>

<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
        <?= $form->field($model,'id')->textInput();?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <?= $form->field($model,'caption')->textInput();?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <?= $form
            ->field($model, 'type')
            ->dropDownList(MenuEnum::arrayList(), [
                'class' => 'form-control custom-select active-form-refresh-control',
                'prompt' => ''
            ]);
        ?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <?= $form
            ->field($model, 'status')
            ->dropDownList(StatusEnum::arrayList(), [
                'class' => 'form-control form-control-uniform active-form-refresh-control',
                'prompt' => ''
            ]);
        ?>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
        <?= $form
            ->field($model, 'is_deleted')
            ->dropDownList(IsDeletedEnum::arrayList(), [
                'class' => 'form-control custom-select active-form-refresh-control',
                'prompt' => ''
            ]);
        ?>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use concepture\yii2handbook\converters\LocaleConverter;

/* @var $this yii\web\View */
/* @var $model concepture\user\models\User */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Настройки'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('user', 'Редактировать'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('user', 'Удалить'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('user', 'Вы уверены, что хотите удалить ?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'value',
            [
                'attribute'=>'locale',
                'value'=>function($data) {

                    return LocaleConverter::value($data->locale);
                }
            ],
            [
                'attribute'=>'domain_id',
                'value'=>$model->getDomainName(),
            ],
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
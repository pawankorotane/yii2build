<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\PermissionHelper;

/* @var $this yii\web\View */
/* @var $model common\models\user */

$this->title = $model->username;
$show_this_nav = PermissionHelper::requireMinimumRole('SuperUser');

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([ 'model' => $model,
        'attributes' => [
            ['attribute'=>'profileLink', 'format'=>'raw'],
//'username', //'auth_key', //'password_hash', //'password_reset_token', 'email:email', 'roleName', 'statusName',
            // lazyload 'status.status_name',
            'email:email', 'roleName', 'statusName',
            'created_at',
            'updated_at',
            'id',
], ]) ?>


</div>

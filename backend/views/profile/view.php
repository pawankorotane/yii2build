<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\PermissionHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\profile */

$this->title = $model->user->username;
$show_this_nav = PermissionHelper::requireMinimumRole('SuperUser');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Profiles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if (!Yii::$app->user->isGuest && $show_this_nav) { ?>
            <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ])
            ?>
            <?php
        }
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model, 'attributes' => [
            ['attribute' => 'userLink', 'format' => 'raw'],
            'first_name',
            'last_name',
            'birthday',
            'gender.gender_name',
            'created_at',
            'updated_at',
            'id',
        ],
    ])
    ?>

</div>

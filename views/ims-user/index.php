<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImsUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ims Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ims User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'ims_fname',
            'ims_address',
            'ims_phone',
            'ims_nickname',
            // 'password_hash',
            // 'auth_key',
            // 'status',
            // 'email:email',
            // 'role',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

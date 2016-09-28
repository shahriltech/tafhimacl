<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MaklumatKakitangan */

$this->title = 'Update Maklumat Kakitangan: ' . $model->id_staf;
$this->params['breadcrumbs'][] = ['label' => 'Maklumat Kakitangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_staf, 'url' => ['view', 'id' => $model->id_staf]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maklumat-kakitangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

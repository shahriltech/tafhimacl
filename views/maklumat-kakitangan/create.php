<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MaklumatKakitangan */

$this->title = 'Create Maklumat Kakitangan';
$this->params['breadcrumbs'][] = ['label' => 'Maklumat Kakitangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maklumat-kakitangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

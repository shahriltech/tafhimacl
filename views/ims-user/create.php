<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ImsUser */

$this->title = 'Create Ims User';
$this->params['breadcrumbs'][] = ['label' => 'Ims Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ims-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

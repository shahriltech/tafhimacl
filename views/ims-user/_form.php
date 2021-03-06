<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImsUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ims-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ims_fname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ims_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ims_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ims_nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'role')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

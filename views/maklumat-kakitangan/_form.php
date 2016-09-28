<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MaklumatKakitangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="maklumat-kakitangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_pekerjaan')->textInput() ?>

    <?= $form->field($model, 'tarikh_resign')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_kp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarikh_mula_kerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jawatan_sekarang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_pekerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahfiz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_tempat_kerja')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'warganegara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tarikh_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alamat_surat_menyurat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'alamat_tetap')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'no_tel_rumah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_tel_bimbit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tahap_kesihatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pengesahan_kesihatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecacatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nyatakan_kecacatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tinggi_cm')->textInput() ?>

    <?= $form->field($model, 'berat_kg')->textInput() ?>

    <?= $form->field($model, 'kumpulan_usrah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ketua_usrah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unit_usrah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_ahli_abim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gaji_asas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'elaun_asas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'elaun_rumah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tabung_gaji')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tabung_guru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sewa_rumah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kksk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'loan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gaji_tahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'acc_tabung_haji')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_kwsp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'acc_bimb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rujukan_tawaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peringkat_gaji')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tangga_gaji')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skim_gaji')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skim_gaji_awal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_waris')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hubungan_waris')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_tel_waris')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelulusan_tertinggi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'peratus_kwsp')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

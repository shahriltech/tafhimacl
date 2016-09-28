<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MaklumatKakitangan */

$this->title = $model->id_staf;
$this->params['breadcrumbs'][] = ['label' => 'Maklumat Kakitangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maklumat-kakitangan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_staf], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_staf], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_staf',
            'status_pekerjaan',
            'tarikh_resign',
            'foto',
            'nama',
            'no_kp',
            'tarikh_mula_kerja',
            'jawatan_sekarang',
            'no_pekerja',
            'tahfiz',
            'alamat_tempat_kerja:ntext',
            'warganegara',
            'tarikh_lahir',
            'tempat_lahir:ntext',
            'alamat_surat_menyurat:ntext',
            'alamat_tetap:ntext',
            'no_tel_rumah',
            'no_tel_bimbit',
            'tahap_kesihatan',
            'pengesahan_kesihatan',
            'kecacatan',
            'nyatakan_kecacatan',
            'tinggi_cm',
            'berat_kg',
            'kumpulan_usrah',
            'nama_ketua_usrah',
            'unit_usrah',
            'no_ahli_abim',
            'gaji_asas',
            'elaun_asas',
            'elaun_rumah',
            'tabung_gaji',
            'tabung_guru',
            'sewa_rumah',
            'kksk',
            'loan',
            'gaji_tahan',
            'acc_tabung_haji',
            'no_kwsp',
            'acc_bimb',
            'rujukan_tawaran',
            'peringkat_gaji',
            'tangga_gaji',
            'skim_gaji',
            'skim_gaji_awal',
            'nama_waris',
            'hubungan_waris',
            'no_tel_waris',
            'kelulusan_tertinggi',
            'peratus_kwsp',
        ],
    ]) ?>

</div>

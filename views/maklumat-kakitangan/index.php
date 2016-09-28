<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MaklumatKakitanganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Maklumat Kakitangan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maklumat-kakitangan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Maklumat Kakitangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            // 'no_kp',
            // 'tarikh_mula_kerja',
            // 'jawatan_sekarang',
             'no_pekerja',
            // 'tahfiz',
            // 'alamat_tempat_kerja:ntext',
             'warganegara',
            // 'tarikh_lahir',
            // 'tempat_lahir:ntext',
            // 'alamat_surat_menyurat:ntext',
            // 'alamat_tetap:ntext',
            // 'no_tel_rumah',
            // 'no_tel_bimbit',
            // 'tahap_kesihatan',
            // 'pengesahan_kesihatan',
            // 'kecacatan',
            // 'nyatakan_kecacatan',
            // 'tinggi_cm',
            // 'berat_kg',
            // 'kumpulan_usrah',
            // 'nama_ketua_usrah',
            // 'unit_usrah',
            // 'no_ahli_abim',
            // 'gaji_asas',
            // 'elaun_asas',
            // 'elaun_rumah',
            // 'tabung_gaji',
            // 'tabung_guru',
            // 'sewa_rumah',
            // 'kksk',
            // 'loan',
            // 'gaji_tahan',
            // 'acc_tabung_haji',
            // 'no_kwsp',
            // 'acc_bimb',
            // 'rujukan_tawaran',
            // 'peringkat_gaji',
            // 'tangga_gaji',
            // 'skim_gaji',
            // 'skim_gaji_awal',
            // 'nama_waris',
            // 'hubungan_waris',
            // 'no_tel_waris',
            // 'kelulusan_tertinggi',
            // 'peratus_kwsp',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

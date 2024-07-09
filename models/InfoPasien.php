<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info_pasien".
 *
 * @property int $id_pasien
 * @property string $nama
 * @property string $alamat
 * @property string $tgl_lahir
 * @property string $usia
 * @property string $keluhan
 *
 * @property InfoTagihan[] $infoTagihans
 * @property TindakanPasien[] $tindakanPasiens
 */
class InfoPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'alamat', 'tgl_lahir', 'usia', 'keluhan'], 'required'],
            [['nama', 'alamat', 'tgl_lahir', 'usia', 'keluhan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'tgl_lahir' => 'Tgl Lahir',
            'usia' => 'Usia',
            'keluhan' => 'Keluhan',
        ];
    }

    /**
     * Gets query for [[InfoTagihans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfoTagihans()
    {
        return $this->hasMany(InfoTagihan::class, ['id_pasien' => 'id_pasien']);
    }

    /**
     * Gets query for [[TindakanPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakanPasiens()
    {
        return $this->hasMany(TindakanPasien::class, ['id_pasien' => 'id_pasien']);
    }
}

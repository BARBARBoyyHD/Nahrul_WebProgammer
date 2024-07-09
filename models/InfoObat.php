<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info_obat".
 *
 * @property int $id_obat
 * @property string|null $nama_obat
 * @property float|null $harga_obat
 *
 * @property InfoTagihan[] $infoTagihans
 * @property TindakanPasien[] $tindakanPasiens
 */
class InfoObat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_obat', 'harga', 'total_obat'], 'required'],
            [['id_pasien', 'id_obat', 'total_obat'], 'integer'],
            [['harga', 'tagihan'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tagihan' => 'Id Tagihan',
            'id_pasien' => 'Id Pasien',
            'id_obat' => 'Id Obat',
            'harga' => 'Harga',
            'total_obat' => 'Total Obat',
            'tagihan' => 'Tagihan',
        ];
    }

    /**
     * Gets query for [[InfoTagihans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInfoTagihans()
    {
        return $this->hasMany(InfoTagihan::class, ['id_obat' => 'id_obat']);
    }

    /**
     * Gets query for [[TindakanPasiens]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTindakanPasiens()
    {
        return $this->hasMany(TindakanPasien::class, ['id_obat' => 'id_obat']);
    }
    public function calculateTagihan()
    {
        $this->tagihan = $this->harga * $this->total_obat;
    }
}

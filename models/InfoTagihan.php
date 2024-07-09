<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info_tagihan".
 *
 * @property int $id_tagihan
 * @property int|null $id_pasien
 * @property int|null $id_obat
 * @property float|null $harga
 * @property int|null $total_obat
 * @property float|null $tagihan
 *
 * @property InfoObat $obat
 * @property InfoPasien $pasien
 */
class InfoTagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info_tagihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_obat', 'total_obat'], 'integer'],
            [['harga', 'tagihan'], 'number'],
            [['id_pasien'], 'exist', 'skipOnError' => true, 'targetClass' => InfoPasien::class, 'targetAttribute' => ['id_pasien' => 'id_pasien']],
            [['id_obat'], 'exist', 'skipOnError' => true, 'targetClass' => InfoObat::class, 'targetAttribute' => ['id_obat' => 'id_obat']],
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
     * Gets query for [[Obat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat()
    {
        return $this->hasOne(InfoObat::class, ['id_obat' => 'id_obat']);
    }

    /**
     * Gets query for [[Pasien]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPasien()
    {
        return $this->hasOne(InfoPasien::class, ['id_pasien' => 'id_pasien']);
    }
    public function calculateTagihan()
    {
        $this->tagihan = $this->harga * $this->total_obat;
    }
}

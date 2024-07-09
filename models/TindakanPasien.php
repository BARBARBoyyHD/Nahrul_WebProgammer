<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan_pasien".
 *
 * @property int $id_tindakan
 * @property int|null $id_pasien
 * @property string|null $nama
 * @property string|null $tindakan
 * @property int|null $id_obat
 * @property string|null $obat
 *
 * @property InfoObat $obat0
 * @property InfoPasien $pasien
 */
class TindakanPasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan_pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_obat'], 'integer'],
            [['nama', 'obat'], 'string', 'max' => 100],
            [['tindakan'], 'string', 'max' => 255],
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
            'id_tindakan' => 'Id Tindakan',
            'id_pasien' => 'Id Pasien',
            'nama' => 'Nama',
            'tindakan' => 'Tindakan',
            'id_obat' => 'Id Obat',
            'obat' => 'Obat',
        ];
    }

    /**
     * Gets query for [[Obat0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getObat0()
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
}

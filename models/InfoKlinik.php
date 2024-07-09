<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info_klinik".
 *
 * @property int $id_pegawai
 * @property string $wilayah
 * @property string $user
 * @property string $pegawai
 * @property string $tindakan
 * @property string $obat
 */
class InfoKlinik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info_klinik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wilayah', 'user', 'pegawai', 'tindakan', 'obat'], 'required'],
            [['wilayah', 'user', 'pegawai'], 'string', 'max' => 250],
            [['tindakan'], 'string', 'max' => 10],
            [['obat'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'wilayah' => 'Wilayah',
            'user' => 'User',
            'pegawai' => 'Pegawai',
            'tindakan' => 'Tindakan',
            'obat' => 'Obat',
        ];
    }
}

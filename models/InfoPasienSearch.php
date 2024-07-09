<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InfoPasien;

/**
 * InfoPasienSearch represents the model behind the search form of `app\models\InfoPasien`.
 */
class InfoPasienSearch extends InfoPasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'nama', 'alamat', 'tgl_lahir', 'usia', 'keluhan'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = InfoPasien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_pasien' => $this->id_pasien,
            'nama' => $this->nama,
            'alamat' => $this->alamat,
            'tgl_lahir' => $this->tgl_lahir,
            'usia' => $this->usia,
            'keluhan' => $this->keluhan,
        ]);

        return $dataProvider;
    }
}

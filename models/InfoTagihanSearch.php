<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InfoTagihan;

/**
 * InfoTagihanSearch represents the model behind the search form of `app\models\InfoTagihan`.
 */
class InfoTagihanSearch extends InfoTagihan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tagihan', 'id_pasien', 'id_obat', 'total_obat'], 'integer'],
            [['harga', 'tagihan'], 'number'],
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
        $query = InfoTagihan::find();

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
            'id_tagihan' => $this->id_tagihan,
            'id_pasien' => $this->id_pasien,
            'id_obat' => $this->id_obat,
            'harga' => $this->harga,
            'total_obat' => $this->total_obat,
            'tagihan' => $this->tagihan,
        ]);

        return $dataProvider;
    }
}

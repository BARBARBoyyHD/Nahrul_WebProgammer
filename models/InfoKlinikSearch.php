<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InfoKlinik;

/**
 * InfoKlinikSearch represents the model behind the search form of `app\models\InfoKlinik`.
 */
class InfoKlinikSearch extends InfoKlinik
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pegawai'], 'integer'],
            [['wilayah', 'user', 'pegawai', 'tindakan', 'obat'], 'safe'],
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
        $query = InfoKlinik::find();

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
            'id_pegawai' => $this->id_pegawai,
        ]);

        $query->andFilterWhere(['like', 'wilayah', $this->wilayah])
            ->andFilterWhere(['like', 'user', $this->user])
            ->andFilterWhere(['like', 'pegawai', $this->pegawai])
            ->andFilterWhere(['like', 'tindakan', $this->tindakan])
            ->andFilterWhere(['like', 'obat', $this->obat]);

        return $dataProvider;
    }
}

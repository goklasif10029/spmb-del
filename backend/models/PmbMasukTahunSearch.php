<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PmbMasukTahun;

/**
 * PmbMasukTahunSearch represents the model behind the search form about `backend\models\PmbMasukTahun`.
 */
class PmbMasukTahunSearch extends PmbMasukTahun
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tahun', 'tahun', 'created_by', 'updated_by', 'active'], 'integer'],
            [['deskripsi_tahun', 'created_at', 'udpated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = PmbMasukTahun::find();

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
            'id_tahun' => $this->id_tahun,
            'tahun' => $this->tahun,
            'created_at' => $this->created_at,
            'udpated_at' => $this->udpated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'deskripsi_tahun', $this->deskripsi_tahun]);

        return $dataProvider;
    }
}

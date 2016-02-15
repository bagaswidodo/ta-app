<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bimbingan;

/**
 * BimbinganSearch represents the model behind the search form about `backend\models\Bimbingan`.
 */
class BimbinganSearch extends Bimbingan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'kd_dosen', 'dosen_dua'], 'integer'],
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
        $query = Bimbingan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'nim' => $this->nim,
            'kd_dosen' => $this->kd_dosen,
            'dosen_dua' => $this->dosen_dua,
        ]);

        return $dataProvider;
    }
}

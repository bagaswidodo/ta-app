<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Progdi;

/**
 * ProgdiSearch represents the model behind the search form about `backend\models\Progdi`.
 */
class ProgdiSearch extends Progdi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_progdi'], 'integer'],
            [['nama_progdi'], 'safe'],
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
        $query = Progdi::find();

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
            'kd_progdi' => $this->kd_progdi,
        ]);

        $query->andFilterWhere(['like', 'nama_progdi', $this->nama_progdi]);

        return $dataProvider;
    }
}

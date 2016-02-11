<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Konsentrasi;

/**
 * KonsentrasiSearch represents the model behind the search form about `backend\models\Konsentrasi`.
 */
class KonsentrasiSearch extends Konsentrasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_konsentrasi'], 'integer'],
            [['nama_konsentrasi'], 'safe'],
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
        $query = Konsentrasi::find();

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
            'kd_konsentrasi' => $this->kd_konsentrasi,
        ]);

        $query->andFilterWhere(['like', 'nama_konsentrasi', $this->nama_konsentrasi]);

        return $dataProvider;
    }
}

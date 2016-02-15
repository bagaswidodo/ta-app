<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Jadwal;

/**
 * JadwalSearch represents the model behind the search form about `frontend\models\Jadwal`.
 */
class JadwalSearch extends Jadwal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kd_dosen', 'hari'], 'integer'],
            [['jam_mulai', 'jam_selesai'], 'safe'],
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
        $query = Jadwal::find()->where(['kd_dosen'=>Yii::$app->user->identity->kd_dosen]);

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
            'kd_dosen' => $this->kd_dosen,
            'hari' => $this->hari,
            'jam_mulai' => $this->jam_mulai,
            'jam_selesai' => $this->jam_selesai,
        ]);

        return $dataProvider;
    }
}

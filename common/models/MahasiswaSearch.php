<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Mahasiswa;

/**
 * MahasiswaSearch represents the model behind the search form about `common\models\Mahasiswa`.
 */
class MahasiswaSearch extends Mahasiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'no_telpon', 'progdi', 'konsentrasi', 'status'], 'integer'],
            [['nama', 'judul', 'deskripsi'], 'safe'],
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
        $query = Mahasiswa::find();

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
            'nim' => $this->nim,
            'no_telpon' => $this->no_telpon,
            'progdi' => $this->progdi,
            'konsentrasi' => $this->konsentrasi,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}

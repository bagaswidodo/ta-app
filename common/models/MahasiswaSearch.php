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
            [['nim', 'progdi', 'status', 'foto', 'proposal', 'kst', 'transkrip', 'usulan_pembimbing_1', 'usulan_pembimbing_2'], 'integer'],
            [['nama', 'no_telpon', 'judul', 'deskripsi'], 'safe'],
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
            'progdi' => $this->progdi,
            'status' => $this->status,
            'foto' => $this->foto,
            'proposal' => $this->proposal,
            'kst' => $this->kst,
            'transkrip' => $this->transkrip,
            'usulan_pembimbing_1' => $this->usulan_pembimbing_1,
            'usulan_pembimbing_2' => $this->usulan_pembimbing_2,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'no_telpon', $this->no_telpon])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi]);

        return $dataProvider;
    }
}

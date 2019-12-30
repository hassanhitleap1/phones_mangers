<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserCreateor;
use Yii;

/**
 * UserCreateorSearch represents the model behind the search form of `app\models\UserCreateor`.
 */
class UserCreateorSearch extends UserCreateor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'central_id', 'type', 'super_admin_id', 'status', ], 'integer'],
            [['username', 'password_hash','created_at', 'email'], 'safe'],
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
        $query = UserCreateor::find();

        

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
        if(UserStaticClass::isAdminUser()){
            $query->where(['central_id'=> Yii::$app->user->identity->central_id]); 
        }
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'central_id' => $this->central_id,
            'type' => $this->type,
            'super_admin_id' => $this->super_admin_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}

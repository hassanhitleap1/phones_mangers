<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Phones;
use Yii;

/**
 * PhonesSearch represents the model behind the search form of `app\models\Phones`.
 */
class PhonesSearch extends Phones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type_phone', 'status', 'gender', 'order'], 'integer'],
            [['phone_number', 'fullname', 'title_job','governorate_id' ,'nationality_id','area_id','date_of_birth', 'created_at', 'updated_at'], 'safe'],
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
        $query = Phones::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith('area');
        $query->joinWith('governorate'); 
        $query->joinWith('nationality');  

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
      

        if($this->status >= 2){
            $subQuery = UserAction::find()->select('phone_id')
            ->where(['user_id'=> Yii::$app->user->id])
            ->andWhere(['status'=>$this->status]);
            $query->andWhere(['in', 'phones.id', $subQuery]); 
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'type_phone' => $this->type_phone,
            'status' => $this->status,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'order' => $this->order,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);


        

        $query->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'nationality.name_ar', $this->nationality_id])
            ->andFilterWhere(['like', 'governorate.name_ar', $this->governorate_id])
            ->andFilterWhere(['like', 'title_job', $this->title_job]);

        return $dataProvider;
    }
}

<?php

use yii\db\Migration;

/**
 * Class m191210_143153_add_phonse_to_table
 */
class m191210_143153_add_phonse_to_table extends Migration
{
    public $data=['phone_number','type_phone','status','fullname','title_job','gender','governorate_id',
    'area_id','nationality_id','date_of_birth','order','created_at','updated_at'];
    public function up()
    {
        
        $listPhone=[];
        for ($one=0; $one < 10 ; $one++) { 
            # code...
            for ($two=0; $two <10 ; $two++) { 
                #
                for ($three=0; $three <10 ; $three++) { 
                    # code...
                    for ($four=0; $four < 10; $four++) { 
                        # code...
                        for ($five=0; $five <10 ; $five++) { 
                            # code...
                            for ($sax=0; $sax <10 ; $sax++) { 
                                # code...
                                for ($sevien=0; $sevien <10 ; $sevien++) { 
                                    # code...
                                    $numberUmnia="078".(string)$one. (string)$two. (string)$three.(string)$four.(string)$five.(string)$sax.(string)$sevien;
                                    $numberOrang="077".(string)$one. (string)$two. (string)$three.(string)$four.(string)$five.(string)$sax.(string)$sevien;
                                    $naumberZain="079".(string)$one. (string)$two. (string)$three.(string)$four.(string)$five.(string)$sax.(string)$sevien;
                                    
                                    if($one==0){

                                        array_push($listPhone,["phone_num"=>$numberOrang]);

                                        
                                        array_push($listPhone,["phone_num"=>$numberUmnia]);

                                        
                                        array_push($listPhone,["phone_num"=>$naumberZain]);

                                        

                                        if($sevien==9){
                                        
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert('phones',$this->data, $listPhone)
                                            ->execute();
                                            
                                            $listPhone=[];
                                            
                                        }
                                    }

                                    if($one==1){

                                        array_push($listPhone,["phone_num"=>$numberOrang]);
                                        array_push($listPhone,["phone_num"=>$numberUmnia]);
                                        array_push($listPhone,["phone_num"=>$naumberZain]);

                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert('phones',$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==2){
                                        array_push($listPhone,["phone_num"=>$numberOrang]);
                                        array_push($listPhone,["phone_num"=>$numberUmnia]);
                                        array_push($listPhone,["phone_num"=>$naumberZain]);

                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert('phones',$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==3){
                                        array_push($listPhone,["phone_num"=>$numberOrang]);
                                        array_push($listPhone,["phone_num"=>$numberUmnia]);
                                        array_push($listPhone,["phone_num"=>$naumberZain]);

                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert('phones',$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==4){
                                        array_push($listPhone,["phone_num"=>$numberOrang]);
                                        array_push($listPhone,["phone_num"=>$numberUmnia]);
                                        array_push($listPhone,["phone_num"=>$naumberZain]);

                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert('phones',$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }
                                    if($one==5){
                                        array_push($listPhone,["phone_num"=>$numberOrang]);
                                        array_push($listPhone,["phone_num"=>$numberUmnia]);
                                        array_push($listPhone,["phone_num"=>$naumberZain]);

                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert('phones',$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }
                                    if($one==6){
                                        array_push($listPhone,["phone_num"=>$numberOrang]);
                                        array_push($listPhone,["phone_num"=>$numberUmnia]);
                                        array_push($listPhone,["phone_num"=>$naumberZain]);

                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert('phones',$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }
                                    if($one==7){
                                        array_push($listPhone,["phone_num"=>$numberOrang]);
                                        array_push($listPhone,["phone_num"=>$numberUmnia]);
                                        array_push($listPhone,["phone_num"=>$naumberZain]);

                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert('phones',$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }
                                    if($one==8){
                                        array_push($listPhone,["phone_num"=>$numberOrang]);
                                        array_push($listPhone,["phone_num"=>$numberUmnia]);
                                        array_push($listPhone,["phone_num"=>$naumberZain]);

                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert('phones',$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }
                                    if($one==9){
                                        array_push($listPhone,["phone_num"=>$numberOrang]);
                                        array_push($listPhone,["phone_num"=>$numberUmnia]);
                                        array_push($listPhone,["phone_num"=>$naumberZain]);

                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert('phones',$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }
                                
                                }
                            }
                        }
                    }
                }
            }
        }

    

    }
    

}



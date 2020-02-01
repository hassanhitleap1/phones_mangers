<?php

use yii\db\Migration;
use app\models\Phones;
use Carbon\Carbon;

/**
 * Class m200201_001239_add_phones_to_tables
 */
class m200201_001239_add_phones_to_tables extends Migration
{
    public $data=['phone_number','type_phone','status','gender','order','created_at','updated_at'];
    public function up()
    {
        
        $listPhone=[];
        $order=12;
        $table=["phones","phones_tow","phones_three","phones_four","phones_five","phones_six"];
        $numbering=1;

        
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
                                        $order=mt_rand(0, 99999999999999);
                                         array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        
                               
                                        if($sevien==9){
                                            
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert($table[0],$this->data, $listPhone)
                                            ->execute();
                                            
                                            $listPhone=[];
                                        
                                            
                                        }
                                    }

                                    if($one==1){
                                        $order=mt_rand(0, 99999999999999);
                                         array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                       'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);


                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert($table[1],$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==2){

                                        $order=mt_rand(0, 99999999999999);

                                         array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                       'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);


                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert($table[2],$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==3){

                                        $order=mt_rand(0, 99999999999999);

                                         array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                       'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);


                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert($table[3],$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==4){

                                        $order=mt_rand(0, 99999999999999);

                                         array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                       'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);



                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert($table[4],$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }


                                    if($one==5){

                                        $order=mt_rand(0, 99999999999999);

                                         array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                       'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);


                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert($table[5],$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==6){

                                        $order=mt_rand(0, 99999999999999);

                                         array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                       'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);



                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert($table[0],$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }


                                    if($one==7){

                                        $order=mt_rand(0, 99999999999999);

                                         array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                             'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);


                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert($table[1],$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }


                                    if($one==8){

                                        $order=mt_rand(0, 99999999999999);

                                         array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                       'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);



                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert($table[2],$this->data, $listPhone)
                                            ->execute();
                                            $listPhone=[];
                                        }
                                    }


                                    if($one==9){

                                        $order=mt_rand(0, 99999999999999);
                                        
                                         array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                             'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        if($sevien==9){
                                            Yii::$app->db
                                            ->createCommand()
                                            ->batchInsert($table[3],$this->data, $listPhone)
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
        
            $numbering++;
        }

    

    }
}

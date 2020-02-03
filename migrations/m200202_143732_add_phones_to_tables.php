<?php

use app\models\Phones;
use Carbon\Carbon;
use yii\db\Migration;

/**
 * Class m200202_143732_add_phones_to_tables
 */
class m200202_143732_add_phones_to_tables extends Migration
{
    public $data=['phone_number','type_phone','status','gender','order','created_at','updated_at'];
    public   $id_tables=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
    public  $id_table=0;
    public function up()
    {

        $listPhone=[];
        $order=12;
        $numbering=1;

        $table="phones_1";
        $order_umnia=mt_rand(0, 99999999999999);
        $order_zain=mt_rand(0, 99999999999999);
        $order_orang=mt_rand(0, 99999999999999);


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

                                    $order_umnia=mt_rand(0, 99999999999999);
                                    $order_zain=mt_rand(0, 99999999999999);
                                    $order_orang=mt_rand(0, 99999999999999);

                                    if($one==0){

                                        array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_orang,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_umnia,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_zain,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);



                                        if($sevien==9){

                                            $table=$this->nameTable($this->id_tables[$this->id_table]);
                                            if($this->id_table == 29){
                                                $this->id_table =0;
                                                $arr=$this->id_tables;
                                                shuffle($arr);
                                                $this->id_tables=$arr;
                                            }

                                            Yii::$app->db
                                                ->createCommand()
                                                ->batchInsert($table,$this->data, $listPhone)
                                                ->execute();

                                            $this->id_table ++;
                                            $listPhone=[];

                                        }
                                    }

                                    if($one==1){
                                        array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_orang,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_umnia,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_zain,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);


                                        if($sevien==9){

                                            $table=$this->nameTable($this->id_tables[$this->id_table]);
                                            if($this->id_table == 29){
                                                $this->id_table =0;
                                                $arr=$this->id_tables;
                                                shuffle($arr);
                                                $this->id_tables=$arr;
                                            }

                                            Yii::$app->db
                                                ->createCommand()
                                                ->batchInsert($table,$this->data, $listPhone)
                                                ->execute();

                                            $this->id_table ++;
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==2){
                                        array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_orang,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_umnia,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_zain,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);


                                        if($sevien==9){

                                            $table=$this->nameTable($this->id_tables[$this->id_table]);
                                            if($this->id_table == 29){
                                                $this->id_table =0;
                                                $arr=$this->id_tables;
                                                shuffle($arr);
                                                $this->id_tables=$arr;
                                            }

                                            Yii::$app->db
                                                ->createCommand()
                                                ->batchInsert($table,$this->data, $listPhone)
                                                ->execute();

                                            $this->id_table ++;
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==3){

                                        array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_orang,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_umnia,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_zain,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);


                                        if($sevien==9){

                                            $table=$this->nameTable($this->id_tables[$this->id_table]);
                                            if($this->id_table == 29){
                                                $this->id_table =0;
                                                $arr=$this->id_tables;
                                                shuffle($arr);
                                                $this->id_tables=$arr;
                                            }

                                            Yii::$app->db
                                                ->createCommand()
                                                ->batchInsert($table,$this->data, $listPhone)
                                                ->execute();

                                            $this->id_table ++;
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==4){

                                        array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_orang,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_umnia,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_zain,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);



                                        if($sevien==9){

                                            $table=$this->nameTable($this->id_tables[$this->id_table]);
                                            if($this->id_table == 29){
                                                $this->id_table =0;
                                                $arr=$this->id_tables;
                                                shuffle($arr);
                                                $this->id_tables=$arr;
                                            }

                                            Yii::$app->db
                                                ->createCommand()
                                                ->batchInsert($table,$this->data, $listPhone)
                                                ->execute();

                                            $this->id_table ++;
                                            $listPhone=[];
                                        }
                                    }


                                    if($one==5){
                                        array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_orang,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_umnia,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_zain,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);


                                        if($sevien==9){

                                            $table=$this->nameTable($this->id_tables[$this->id_table]);
                                            if($this->id_table == 29){
                                                $this->id_table =0;
                                                $arr=$this->id_tables;
                                                shuffle($arr);
                                                $this->id_tables=$arr;
                                            }

                                            Yii::$app->db
                                                ->createCommand()
                                                ->batchInsert($table,$this->data, $listPhone)
                                                ->execute();

                                            $this->id_table ++;
                                            $listPhone=[];
                                        }
                                    }

                                    if($one==6){


                                        array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_orang,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_umnia,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_zain,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);



                                        if($sevien==9){

                                            $table=$this->nameTable($this->id_tables[$this->id_table]);
                                            if($this->id_table == 29){
                                                $this->id_table =0;
                                                $arr=$this->id_tables;
                                                shuffle($arr);
                                                $this->id_tables=$arr;
                                            }

                                            Yii::$app->db
                                                ->createCommand()
                                                ->batchInsert($table,$this->data, $listPhone)
                                                ->execute();

                                            $this->id_table ++;
                                            $listPhone=[];
                                        }
                                    }


                                    if($one==7){

                                        array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_orang,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_umnia,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_zain,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);


                                        if($sevien==9){

                                            $table=$this->nameTable($this->id_tables[$this->id_table]);
                                            if($this->id_table == 29){
                                                $this->id_table =0;
                                                $arr=$this->id_tables;
                                                shuffle($arr);
                                                $this->id_tables=$arr;
                                            }

                                            Yii::$app->db
                                                ->createCommand()
                                                ->batchInsert($table,$this->data, $listPhone)
                                                ->execute();

                                            $this->id_table ++;
                                            $listPhone=[];
                                        }
                                    }


                                    if($one==8){

                                        array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_orang,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_umnia,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_zain,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);



                                        if($sevien==9){

                                            $table=$this->nameTable($this->id_tables[$this->id_table]);
                                            if($this->id_table == 29){
                                                $this->id_table =0;
                                                $arr=$this->id_tables;
                                                shuffle($arr);
                                                $this->id_tables=$arr;
                                            }

                                            Yii::$app->db
                                                ->createCommand()
                                                ->batchInsert($table,$this->data, $listPhone)
                                                ->execute();

                                            $this->id_table ++;
                                            $listPhone=[];
                                        }
                                    }


                                    if($one==9){

                                        array_push($listPhone, [
                                            'phone_number' => $numberOrang,
                                            'type_phone' => Phones::ORANGE,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_orang,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $numberUmnia,
                                            'type_phone' => Phones::UMNIAH,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_umnia,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        array_push($listPhone, [
                                            'phone_number' => $naumberZain,
                                            'type_phone' => Phones::ZAIN,
                                            'status' => Phones::ACTIVE,
                                            'gender' => Phones::UNDEFINED,
                                            'order' => $order_zain,
                                            'created_at' => Carbon::now('Asia/Amman')->toDateString(),
                                            'updated_at' => Carbon::now('Asia/Amman')->toDateString(),
                                        ]);

                                        if($sevien==9){

                                            $table=$this->nameTable($this->id_tables[$this->id_table]);
                                            if($this->id_table == 29){
                                                $this->id_table =0;
                                                $arr=$this->id_tables;
                                                shuffle($arr);
                                                $this->id_tables=$arr;
                                            }

                                            Yii::$app->db
                                                ->createCommand()
                                                ->batchInsert($table,$this->data, $listPhone)
                                                ->execute();

                                            $this->id_table ++;

                                            $listPhone=[];
                                        }
                                    }

                                    $numbering+=3;

                                }
                            }
                        }
                    }
                }
            }

        }



    }


    private  function  nameTable($id_table){
        $id=1;
        return "phones_$id_table";

    }
}
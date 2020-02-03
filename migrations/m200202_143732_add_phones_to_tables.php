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
                                            if($this->id_table == 30){
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
                                            if($this->id_table == 30){
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
                                            if($this->id_table == 30){
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
                                            if($this->id_table == 30){
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
                                            if($this->id_table == 30){
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
                                            if($this->id_table == 30){
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
                                            if($this->id_table == 30){
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
                                            if($this->id_table == 30){
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
                                            if($this->id_table == 30){
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
                                            if($this->id_table == 30){
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

        if($numbering <= 1000000){
            $id=1;
            return "phones_$id";
        }elseif (1000000 < $numbering && $numbering <= 2000000){
            $id=2;
            return "phones_$id";
        } elseif (2000000 < $numbering && $numbering <= 3000000){
            $id=3;
            return "phones_$id";
        }elseif (3000000 < $numbering && $numbering <= 4000000){
            $id=4;
            return "phones_$id";
        }elseif (4000000 < $numbering && $numbering <= 5000000){
            $id=5;
            return "phones_$id";
        }elseif (5000000 < $numbering && $numbering <= 6000000){
            $id=6;
            return "phones_$id";
        }elseif (6000000 < $numbering && $numbering <= 7000000){
            $id=7;
            return "phones_$id";
        }elseif (7000000 < $numbering && $numbering <= 8000000){
            $id=8;
            return "phones_$id";
        }elseif (8000000 < $numbering && $numbering <= 9000000){
            $id=9;
            return "phones_$id";
        }elseif (9000000 < $numbering && $numbering <= 10000000){
            $id=10;
            return "phones_$id";
        }elseif (10000000 < $numbering && $numbering <= 11000000){
            $id=11;
            return "phones_$id";
        } elseif (11000000 < $numbering && $numbering <= 12000000){
            $id=12;
            return "phones_$id";
        }elseif (12000000 < $numbering && $numbering <= 13000000){
            $id=13;
            return "phones_$id";
        }elseif (13000000 < $numbering && $numbering <= 14000000){
            $id=14;
            return "phones_$id";
        }elseif (14000000 < $numbering && $numbering <= 15000000){
            $id=15;
            return "phones_$id";
        }elseif (15000000 < $numbering && $numbering <= 16000000){
            $id=16;
            return "phones_$id";
        }elseif (16000000 < $numbering && $numbering <= 17000000){
            $id=17;
            return "phones_$id";
        }elseif (17000000 < $numbering && $numbering <= 18000000){
            $id=18;
        }elseif (18000000 < $numbering && $numbering <= 19000000){
            $id=19;
            return "phones_$id";
        }elseif (19000000 < $numbering && $numbering <= 20000000){
            $id=20;
            return "phones_$id";
        } elseif (20000000 < $numbering && $numbering <= 21000000){
            $id=21;
            return "phones_$id";
        }elseif (21000000 < $numbering && $numbering <= 22000000){
            $id=22;
            return "phones_$id";
        }elseif (22000000 < $numbering && $numbering <= 23000000){
            $id=23;
            return "phones_$id";
        }elseif (23000000 < $numbering && $numbering <= 24000000){
            $id=24;
            return "phones_$id";
        }elseif (24000000 < $numbering && $numbering <= 25000000){
            $id=24;
            return "phones_$id";
        }elseif (25000000 < $numbering && $numbering <= 26000000){
            $id=26;
            return "phones_$id";
        }elseif (26000000 < $numbering && $numbering <= 27000000){
            $id=27;
            return "phones_$id";
        }elseif (27000000 < $numbering && $numbering <= 28000000){
            $id=28;
            return "phones_$id";
        }elseif (28000000 < $numbering && $numbering <= 29000000){
            $id=29;
            return "phones_$id";
        }elseif (29000000 < $numbering && $numbering <= 30000000){
            $id=30;
            return "phones_$id";
        }

        return "phones_1";
    }
}

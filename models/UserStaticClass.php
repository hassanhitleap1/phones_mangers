<?php

namespace app\models;

use Yii;

/**
 * User model

 */
class  UserStaticClass 
{
    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;
    const USER_SUPER_ADMIN=0;
    const USER_ADMIN=1;
    const USER_NORMAL=2;
    const MALE= 1;
    const FEMALE=2;
  

    public static function   isNormalUser()
    {
        # code...
        return (Yii::$app->user->identity->type==Self::USER_NORMAL)?true:false;
    }

    public static function   isSuperUser()
    {
        # code...
        return (Yii::$app->user->identity->type==Self::USER_SUPER_ADMIN)?true:false;
    }

    public static function   isAdminUser()
    {
        # code...
        return (Yii::$app->user->identity->type==Self::USER_ADMIN)?true:false;
    }


}

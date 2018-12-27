<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/25
 * Time: 10:15
 */
namespace backend\models;

use yii\db\ActiveRecord;
class Login extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: sutiporn
 * Date: 6/14/2018 AD
 * Time: 9:44 PM
 */
namespace app\models;
use yii\base\model;
class UsersForm extends model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
              [['name','email'],'required'],
              ['email','email'],
        ];
    }
}
?>
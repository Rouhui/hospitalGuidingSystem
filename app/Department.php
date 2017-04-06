<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    const SEX_UN = 10;  //未知
    const SEX_BOY = 20;  //男
    const SEX_GRIL = 30;  //女

    protected  $table = 'department';

//    protected $fillable = ['name', 'age', 'sex'];
//
//    public $timestamps = true;
//
//    protected function getDateFormat()
//    {
//        return time();
//    }
//
//    protected function asDateTime($value)
//    {
//        return $value;
//    }

    public function getSex($index = null)
    {
        $arr = [
            self::SEX_UN => '未知',
            self::SEX_BOY => '男',
            self::SEX_GRIL => '女',
        ];
        if($index != null) {
            return array_key_exists($index, $arr) ? $arr[$index] : $arr[sels::SEX_UN];
        }
        return $arr;
    }
}
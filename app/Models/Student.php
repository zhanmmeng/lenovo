<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    const SEX_UN = 10;//未知
    const SEX_BOY = 20;//男
    const SEX_GIRL = 30;//女

    protected $table = "student";

    //批量赋值
    protected $fillable = ['name','age','sex','created_at'];

    public $timestamps = true;
    public function getDateFormat(){
        return time();
    }

    //解决一个Call to a member function format() on string的问题
    public function fromDateTime($val)
    {
        return empty($val)?$val:$this->getDateFormat() ;
    }

    public  function asDateTime($val){
        return $val;
    }

    public function sex($ind = null){
        $arr = [
          self::SEX_UN => '未知',
          self::SEX_BOY => '男',
          self::SEX_GIRL => '女',
        ];

        if ($ind !== null){
            return array_key_exists($ind,$arr) ? $arr[$ind] : $arr[self::SEX_UN];
        }
        return $arr;
    }
//    use HasFactory;
}

<?php
namespace app\index\model;

use think\Model;

class test extends Model
{
    protected $table='bc_homework_answers';

    public function getOne(){
        return $this->where(['is_read'=>['>',1],'content'=>'c1'])
                    ->find();
    }

}
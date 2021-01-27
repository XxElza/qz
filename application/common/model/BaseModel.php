<?php
/**
 * Created by PhpStorm.
 * User: liulei
 * Date: 2021/1/23
 * Time: 9:39 PM
 */

namespace app\common\model;


use think\Model;

class BaseModel extends Model
{

    protected $hidden = [
        'created_at', 'updated_at'
    ];

}
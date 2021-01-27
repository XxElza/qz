<?php

namespace app\common\model;

use think\Model;

class User extends Model
{
    protected $table = 'aw_user';
    protected $insert = ['created_at'];
    protected $update = ['updated_at'];

    public function setCreatedAtAttr()
    {
        return time();
    }

    public function setUpdatedAtAttr()
    {
        return time();
    }
}

<?php
namespace app\admin\controller;

use think\Request;
use app\admin\controller\Base;

class Index extends Base
{

    public function index()
    {
        return $this->fetch();
    }

}

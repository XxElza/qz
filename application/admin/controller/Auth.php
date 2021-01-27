<?php

namespace app\admin\controller;

use app\common\consts\Response;
use app\common\model\User;
use think\Controller;
use think\Request;
use think\facade\Session;

class Auth extends Controller
{

    public function index()
    {
        if(Session::has('admin'))
            $this -> redirect('Index/index');

        return $this->fetch();
    }


    public function login(Request $request)
    {
        if (! $request->isPost())
            abort(405, '不支持的请求方式');

        $username = $request->username;
        $user = User::where('username', $username)->find();
        if (! $user)
            abort(401, '无此用户信息');

        $password = encryPassword($request->password);
        if ($password != $user['password'])
            abort(401, '密码错误');

        session('admin', $user);
        return $this -> redirect('admin/index/index');
    }


    public function logout(Request $request)
    {
        if (! $request->isPost())
            abort(405, '不支持的请求方式');

        session('admin', null);
    }

}

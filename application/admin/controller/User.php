<?php
namespace app\admin\controller;

use app\admin\controller\Base;
use app\common\consts\Response;
use app\common\model\User as UserModel;
use think\Request;
use think\facade\Log;

class User extends Base
{

    public function detail(Request $request)
    {
        $id = $request->id;
        $data = UserModel::where('id', $id)->find();
        if (! $data)
            abort(404);

        return $this->fetch('', ['data' => $data]);
    }


    public function store(Request $request)
    {
        if (! $request->isPost())
            return $this->errorJson(Response::METHOD_NOT_ALLOW);

        $params = $request->post();
        $check = UserModel::where('username', $params['username'])->where('id', '<>', $params['id'])->find();
        if ($check)
            return $this->errorJson(Response::UPDATE_ERR, '账号已存在');
        if (! empty($params['password']))
            $params['password'] = encryPassword($params['password']);

        $model = (new UserModel)->isUpdate(true);

        try {
            $model->save($params);

            return $this->successJson();
        } catch (\Exception $e) {
            Log::error($e->getMessage(), $params);
            return $this->errorJson(Response::UPDATE_ERR);
        }
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: liulei
 * Date: 2021/1/23
 * Time: 9:36 PM
 */

namespace app\admin\controller;

use app\common\consts\Response;
use app\common\model\BrandModel;
use think\facade\Log;
use think\Request;

class Brand extends Base
{
    public function index()
    {
        $data = BrandModel::paginate(20);

        return $this->fetch('', ['data' => $data]);
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $data = BrandModel::where('id', $id)->find();

        $title = $id ? '编辑' : '创建';

        return $this->fetch('', ['data' => $data, 'title' => $title]);
    }


    public function store(Request $request)
    {
        if (! $request->isPost())
            return $this->errorJson(Response::METHOD_NOT_ALLOW);

        $params = $request->only(['id', 'name', 'en_name', 'desc', 'en_desc', 'logo', 'cover', 'path', 'video']);

        $model = new BrandModel;
        $params['id'] ? $model->isUpdate(true) : $model->isUpdate(false);


        try {
            $model->save($params);

            return $this->successJson();
        } catch (\Exception $e) {
            Log::error($e->getMessage(), $params);
            return $this->errorJson(Response::UPDATE_ERR, $e->getMessage());
        }
    }


    public function destroy(Request $request)
    {
        if (! $request->isPost())
            return $this->errorJson(Response::METHOD_NOT_ALLOW);

        $id = $request->id;
        $data = BrandModel::where('id', $id)->find();
        if (! $data)
            return $this->errorJson(Response::NO_DATA);

        try {
            $data->delete();

            return $this->successJson();
        } catch (\Exception $e) {
            Log::error($e->getMessage(), $data);
            return $this->errorJson(Response::UPDATE_ERR);
        }
    }
}
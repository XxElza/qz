<?php
/**
 * Created by PhpStorm.
 * User: liulei
 * Date: 2021/1/24
 * Time: 9:51 PM
 */

namespace app\admin\controller;


use app\common\consts\Response;
use app\common\model\ProductModel;
use app\common\model\SeriesModel;
use think\facade\Log;
use think\Request;

class Product extends Base
{
    public function index(Request $request)
    {
        $series_id = $request->get('type');

        if ($series_id) {
            $data = ProductModel::where(['series_id' => $series_id])->order(['id' => 'desc'])->paginate(20, false, [ 'query' => $request->param()]);
        } else {
            $data = ProductModel::order(['id' => 'desc'])->paginate(20);
        }

        $series = SeriesModel::field(['id', 'name'])->select();

        return $this->fetch('', ['data' => $data, 'series' => $series]);
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $data = ProductModel::where('id', $id)->find();
        $series = SeriesModel::field(['id', 'name'])->select();
        if ($data) {
            $data['series_name'] = SeriesModel::where(['id' => $data['series_id']])->value('name');
        }

        $title = $id ? '编辑' : '创建';

        return $this->fetch('', ['data' => $data, 'title' => $title, 'series' => $series]);
    }


    public function store(Request $request)
    {

        if (! $request->isPost())
            return $this->errorJson(Response::METHOD_NOT_ALLOW);

        $params = $request->only(['id', 'name', 'en_name','path', 'series_id']);

        if (empty($params['series_id'])) {
            return $this->errorJson(Response::UPDATE_ERR,'请选择系列');
        }

        $model = new ProductModel;
        $params['id'] ? $model->isUpdate(true) : $model->isUpdate(false);

        try {
            $model->save($params);

            return $this->successJson();
        } catch (\Exception $e) {
            Log::error($e->getMessage(), $params);
            return $this->errorJson(Response::UPDATE_ERR);
        }
    }


    public function destroy(Request $request)
    {
        if (! $request->isPost())
            return $this->errorJson(Response::METHOD_NOT_ALLOW);

        $id = $request->id;
        $data = ProductModel::where('id', $id)->find();
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
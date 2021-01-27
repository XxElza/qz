<?php
/**
 * Created by PhpStorm.
 * User: liulei
 * Date: 2021/1/24
 * Time: 9:38 PM
 */

namespace app\admin\controller;


use app\common\consts\Response;
use app\common\model\BrandModel;
use app\common\model\ProductModel;
use app\common\model\SeriesModel;
use think\Db;
use think\Exception;
use think\facade\Log;
use think\Request;

class Series extends Base
{
    public function index(Request $request)
    {
        $brand_id = $request->get('type');

        if ($brand_id) {
            $data = SeriesModel::where(['brand_id' => $brand_id])->order(['id' => 'desc'])->paginate(20, false, [ 'query' => $request->param()]);
        } else {
            $data = SeriesModel::order(['id' => 'desc'])->paginate(20);
        }

        $brand = BrandModel::field(['id', 'name'])->select();

        return $this->fetch('', ['data' => $data, 'brand' => $brand]);
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $data = SeriesModel::where('id', $id)->find();
        $brand = BrandModel::field(['id', 'name'])->select();
        if ($data) {
            $data['brand_name'] = BrandModel::where(['id' => $data['brand_id']])->value('name');
        }

        $title = $id ? '编辑' : '创建';

        return $this->fetch('', ['data' => $data, 'title' => $title, 'brand' => $brand]);
    }


    public function store(Request $request)
    {
        if (! $request->isPost())
            return $this->errorJson(Response::METHOD_NOT_ALLOW);

        $params = $request->only(['id', 'name', 'en_name', 'desc', 'en_desc', 'logo', 'cover', 'path', 'video', 'brand_id', 'is_home']);

        if (empty($params['brand_id'])) {
            return $this->errorJson(Response::UPDATE_ERR,'请选择品牌');
        }

        $model = new SeriesModel;
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
        $data = SeriesModel::where('id', $id)->find();
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

    public function upload_product(Request $request)
    {
        $id = $request->id;
        $files = request()->file('files');


        Db::startTrans();
        try {
            foreach ($files as $file) {
                $move = $file->move('uploads/');
                if (!$move)
                    return $this->errorJson(Response::UPLOAD_ERR);

                $result = str_replace("\\", "/", $move->getSaveName());

                $model = new ProductModel();
                $model->save([
                    'name' => '',
                    'en_name' => '',
                    'series_id' => $id,
                    'path' => $result
                ]);

            }
            Db::commit();
            return $this->successJson();
        } catch (Exception $e) {
            Db::rollback();
            return $this->errorJson(Response::UPDATE_ERR);
        }

    }
}
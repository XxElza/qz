<?php
namespace app\admin\controller;

use app\common\consts\Response;
use app\common\model\NewsModel;
use think\Request;
use think\facade\Log;

class News extends Base
{

    public function index()
    {
        $data = NewsModel::order(['send_time' => 'desc', 'updated_at' => 'desc'])->paginate(20);

        return $this->fetch('', ['data' => $data]);
    }

    public function detail(Request $request)
    {
        $id = $request->id;
        $data = NewsModel::where('id', $id)->find();

        $title = $id ? '编辑' : '创建';

        return $this->fetch('', ['data' => $data, 'title' => $title]);
    }


    public function store(Request $request)
    {
        if (! $request->isPost())
            return $this->errorJson(Response::METHOD_NOT_ALLOW);

            $params = $request->only(['id', 'title', 'en_title', 'content', 'en_content', 'send_time']);

            $model = new NewsModel;
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
            $data = NewsModel::where('id', $id)->find();
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

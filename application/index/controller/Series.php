<?php
/**
 * Created by PhpStorm.
 * User: liulei
 * Date: 2021/1/25
 * Time: 9:55 PM
 */

namespace app\index\controller;


use app\common\model\ProductModel;
use app\common\model\SeriesModel;
use think\Request;

class Series extends Base
{
    public function Detail(Request $request)
    {
        $id = $request->id;

        $data = ProductModel::where(['series_id' => $id])->field(['en_name as name', 'path'])->select();

        $series = SeriesModel::where(['id' => $id])->field(['en_name as name', 'en_desc as content', 'video'])->find();

        $series['images'] = $data;

        return $this->successJson($series);
    }


}
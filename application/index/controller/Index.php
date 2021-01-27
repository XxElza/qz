<?php

namespace app\index\controller;

use app\common\model\BrandModel;
use app\common\model\NewsModel;
use app\common\model\SeriesModel;


class Index extends Base
{

    public function index()
    {

        $brand = BrandModel::field(['id', 'en_name', 'cover'])->select();
        $news = NewsModel::field(['id', 'en_title', 'en_content', 'send_time'])->where('send_time', '<=', date('Y-m-d'))
            ->order('send_time', 'desc')->limit(3)
            ->select();

        $series = $this->getHomeSeries();

        return $this->fetch('', ['brand' => $brand, 'news' => $news]);
    }

    public function brand()
    {

        $brand = BrandModel::field(['id', 'en_name', 'en_desc', 'logo', 'video','cover'])->select();

        foreach ($brand as &$v) {
            $v['series'] = SeriesModel::where(['brand_id' => $v['id']])->field(['cover', 'id'])->limit(5)->select();
        }

        return $this->fetch('', ['brand' => $brand]);
    }

}

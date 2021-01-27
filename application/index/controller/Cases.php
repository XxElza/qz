<?php

namespace app\index\controller;

use app\common\model\Images as ImagesModel;
use app\common\model\Casies as CasiesModel;

class Cases extends Base
{
    public function index()
    {
        $banner = ImagesModel::where('type', 4)->order('id', 'desc')->find();
        $wap_banner = ImagesModel::where('type', 11)->order('id', 'desc')->find();
        $cases = CasiesModel::order(['order_by' => 'desc', 'id' => 'desc'])->select();

        return $this->fetch('', [
                'banner' => $banner,
                'wap_banner' => $wap_banner,
                'cases' => $cases,
            ]);
    }
}

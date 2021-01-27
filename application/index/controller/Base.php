<?php
namespace app\index\controller;

use app\common\consts\Response;
use app\common\model\SeriesModel;
use app\common\model\System as SystemModel;
use app\common\model\Images as ImagesModel;
use think\Controller;
use think\Request;
use think\facade\Session;

Class Base extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $series = $this->getHomeSeries();

        $this->assign('series', $series);
    }


    public function getHomeSeries()
    {
        $series = SeriesModel::where(['is_home' => 1])
            ->field(['id', 'en_name', 'cover'])
            ->limit(2)
            ->order('updated_at', 'desc')
            ->select();

        return $series;
    }


    public static function successJson($data = null)
    {
        $arr = [];
        $arr['success'] = true;
        $arr['err_code'] = -1;
        $arr['err_msg'] = '';
        $arr['data'] = $data;

        return json($arr);
    }


    public static function errorJson($code, $msg = '', $redirect = '', $debugMsg = null)
    {
        $err = '';
        if (empty($msg) && array_key_exists($code, Response::ERROR_MESSAGES))
        {
            $err = Response::ERROR_MESSAGES[$code];
        } else {
            $err = $msg;
        }

        $res = array('err_code' => $code, 'err_msg' => $err, 'success' => false, 'data'=> null);
        if ($redirect != '')
            $res['redirect'] = $redirect;

        return json($res);
    }

}

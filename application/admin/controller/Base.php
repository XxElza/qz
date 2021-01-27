<?php
namespace app\admin\controller;

use app\common\consts\Response;
use think\Controller;
use think\Request;
use think\facade\Session;

Class Base extends Controller
{

    protected $action_filter;

    public function __construct()
    {
        parent::__construct();

        $this->action_filter = [];
        $this->checkLogin();
    }


    protected function checkLogin()
    {
        $controller = request()->controller();
        $action = request()->action();
        if (! in_array($controller . '/' . $action, $this->action_filter)) {
            if(! Session::has('admin')) {
                if (request()->isAjax())
                    return $this->errorJson(Response::NO_PRIVILAGE);
                else
                    return $this -> redirect('Auth/index');
            }
        }
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


    public function upload(Request $request)
    {
        if (! $request->isPost())
            return $this->errorJson(Response::METHOD_NOT_ALLOW);

            $file = request()->file('media');
            if (! $file)
                return $this->errorJson(Response::UPLOAD_ERR, '请上传文件');

            $move = $file->move( 'uploads/');
            if(! $move)
                return $this->errorJson(Response::UPLOAD_ERR);

            $result = str_replace("\\", "/", $move->getSaveName());

            return $this->successJson(['path' => $result]);
    }

}

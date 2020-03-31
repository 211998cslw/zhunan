<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function message($status = 'success', $code = 0, $message = 'bingo', $data = [])
    {
        if ($message == '') {
            $message = config('errorcode.code')[(int) $code];
        }
        return response()->json([
            'status' => $status,
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ]);
    }
    //成功默认返回
    public function success($data = [])
    {
        return $this->message('success', 200, '', $data);
    }
    //失败默认返回
    public function fail($code, $data = [])
    {
        return $this->message('error', $code, '', $data);
    }
}

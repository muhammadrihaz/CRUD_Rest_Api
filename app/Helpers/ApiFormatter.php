<?php 

namespace app\Helpers;

class ApiFormatter {

    protected static $response = [
        'code' => null,
        'message' => null,
        'data' => null
    ];

    public static function createApi ($code = null, $message = null,$data =null){
        Self::$response['code']=$code;
        Self::$response['message']=$message;
        Self::$response['data']=$data;

        return response()->json(Self::$response,Self::$response['code']);
    }
}

?>
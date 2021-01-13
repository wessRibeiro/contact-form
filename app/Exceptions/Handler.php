<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Http\Resources\Api\V1\BaseResourceApi;
use Illuminate\Http\Response;
use \Illuminate\Validation\ValidationException;
/**
 * Created by Weslley Ribeiro
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Class Handler
 * @package App\Exceptions
 */
class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 11/01/2021 02:53
     */
    public function register()
    {
        $this->renderable(function (\Exception $exception, $request) {
            //error validation inputs
            if($exception instanceof ValidationException){
                $request->code = $exception->status;
                $request->message = $exception->getMessage();
                $request->errors = $exception->errors();

            //error exception generic
            }else{
                $request->code = ($exception->getCode() != 0) ? $exception->getCode()
                    : Response::HTTP_BAD_REQUEST;
                $request->message = ($exception->getMessage() != '') ? $exception->getMessage()
                    : Response::$statusTexts[Response::HTTP_BAD_REQUEST];
            }
            return new BaseResourceApi($request,$request->code,$request->message);
        });
    }
}

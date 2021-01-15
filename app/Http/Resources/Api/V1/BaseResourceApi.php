<?php
/**
 * Created by Weslley Ribeiro.
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Date 11/01/2021 02:12
 */

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;

/**
 * Created by Weslley Ribeiro
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Class BaseResourceApi
 * @package App\Http\Resources\Api\V1
 */
class BaseResourceApi extends JsonResource
{
    /**
     * @var int|mixed
     */
    private $code;
    /**
     * @var mixed|string
     */
    private $message;

    /**
     * BaseResourceApi constructor.
     * @param $resource
     * @param int $code
     * @param string $message
     */
    public function __construct($resource, $code = Response::HTTP_OK, $message = 'OK')
    {
        $this->code = $code;
        $this->message = $message;
        parent::__construct($resource);
    }

    /**
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 11/01/2021 11:47
     * @param \Illuminate\Http\Request $request
     * @param \Illuminate\Http\JsonResponse $response
     */
    public function withResponse($request, $response)
    {
        $response->setStatusCode($this->code);
    }

    /**
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 12/01/2021 12:35
     * @param \Illuminate\Http\Request $request
     * @return array|string[]
     */
    public function with($request)
    {
        return [
            'message' => $this->message ?? Response::$statusTexts[200],
        ];
    }

    /**
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 11/01/2021 02:36
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        //se for arquivo retorna o nome do arquivo, não o objeto inteiro
        $files = $request->allFiles();
        $data = collect($request->all())->map(function($value, $key) use ($files, $request){
            if((Arr::exists($files, $key))){
                return $request->file($key)->getClientOriginalName();
            }
            return $value;
        });

        return $request->errors ?? $data->toArray();
    }
}

<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\ContactReceivedRequest;
use App\Services\Api\V1\ContactReceivedService;
use App\Http\Resources\Api\V1\BaseResourceApi;
use Illuminate\Http\Response;

/**
 * Created by Weslley Ribeiro
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Class ContactReceivedController
 * @package App\Http\Controllers\Api\V1
 */
class ContactReceivedController extends Controller
{
    /**
     * @var ContactReceivedService
     */
    protected $service;

    /**
     * ContactReceivedController constructor.
     * @param ContactReceivedService $contactReceivedService
     */
    public function __construct(ContactReceivedService $contactReceivedService)
    {
        $this->service = $contactReceivedService;
    }

    /**
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 11/01/2021 02:19
     * @param ContactReceivedRequest $request
     * @return BaseResourceApi
     */
    public function store(ContactReceivedRequest $request)
    {
        $this->service->store($request);

        return new BaseResourceApi($request, Response::HTTP_CREATED, __('api.store.success'));

    }
}

<?php

namespace App\Services\Api\V1;
use Illuminate\Http\Request;
use App\Mail\ContactReceived as ContactReceivedMail;
use App\Http\Resources\Api\V1\ContactReceived as ContactReceivedResource;
use App\Models\ContactReceived;
use Illuminate\Support\Facades\Mail;

/**
 * Created by Weslley Ribeiro
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Class ContactReceivedService
 * @package App\Services\Api\V1
 */
class ContactReceivedService
{
    /**
     * @var ContactReceived
     */
    private $model;

    /**
     * ContactReceivedService constructor.
     * @param ContactReceived $contactReceived
     */
    public function __construct(ContactReceived $contactReceived)
    {
        $this->model = $contactReceived;
    }

    /**
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 12/01/2021 12:36
     * @param Request $request
     * @return ContactReceived
     */
    public function store(Request $request)
    {
        //salvando arquivo
        $path = $request->file('contact_attachment')
                ->store('contact-attachments');

        $request->fileUrl = $path;
        $request->ip = $request->getClientIp();

        //salvando registro formatado
        $contactReceived = new ContactReceivedResource($request);

        $contactCreated = $this->model
                            ->create($contactReceived->jsonSerialize());

        //criando registro na fila de emails
        Mail::onQueue('emails', new ContactReceivedMail($contactReceived));

        return $contactCreated;
    }
}

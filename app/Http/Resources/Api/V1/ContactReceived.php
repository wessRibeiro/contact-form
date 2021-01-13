<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;


/**
 * Created by Weslley Ribeiro
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Class ContactReceived
 * @package App\Http\Resources\Api\V1
 */
class ContactReceived extends JsonResource
{

    /**
     * Created by Weslley Ribeiro.
     * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
     * Date 12/01/2021 12:36
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->contact_name,
            'ip' => $this->ip,
            'email' => $this->contact_email,
            'subject' => $this->contact_subject,
            'ddi_ddd_phone' => $this->contact_telephone,
            'message' => $this->contact_message,
            'fileUrl' => $this->fileUrl,
        ];
    }
}

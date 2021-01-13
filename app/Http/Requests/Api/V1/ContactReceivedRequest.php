<?php


namespace App\Http\Requests\Api\V1;

/**
 * Created by Weslley Ribeiro
 * User: Weslley Ribeiro <wess_ribeiro@hotmail.com>
 * Class ContactReceivedRequest
 * @package App\Http\Requests\Api\V1
 */
class ContactReceivedRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'contact_name' => 'required|max:100',
            'contact_email' => 'required|max:100|email',
            'contact_telephone' => 'required|max:20',
            'contact_subject' => 'required|max:100',
            'contact_message' => 'required|max:800',
            'contact_attachment' => 'required|max:500|mimes:pdf,doc,docx,odt,txt',
        ];

    }
}

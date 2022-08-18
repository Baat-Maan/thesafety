<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
        $id = $this->request->get('user_id');
        return [
            'company' => 'required|unique:users,company,'. $id,
            'address' => 'required',
              'contact_person_name' => 'required',
              'contact_person_mobile' => 'required',
               
        ];
    }
}

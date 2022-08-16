<?php

namespace Modules\Customer\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Modules\Core\Rules\Phone;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'customer_name' => ['required', 'string', 'max:255'],
            'customer_mobile' => ['required', new Phone],
            'customer_email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->customer)],
            'secondary_email' => ['required', 'email'],
            'phone' => ['nullable', 'string', 'max:20'],
            'contact' => ['nullable', 'string', 'max:255'],
            'fax' => ['nullable', 'string', 'max:255'],
            'city' => ['nullable', 'string', 'max:100'],
            'state' => ['nullable', 'string', 'max:100'],
            'zip' => ['nullable', 'string', 'max:50'],
            'country' => ['nullable', 'string', 'max:100'],
            'address_1' => ['nullable', 'string', 'max:255'],
            'address_2' => ['nullable', 'string', 'max:255'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}

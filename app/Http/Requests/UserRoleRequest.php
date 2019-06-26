<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;

class UserRoleRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $rules = [
            'roles' => [
                'required',
                'array'
            ],
            'roles.*' => [
                'required',
                'string',
                Rule::exists('roles', 'name')
            ]
        ];

        return $rules;
    }

}

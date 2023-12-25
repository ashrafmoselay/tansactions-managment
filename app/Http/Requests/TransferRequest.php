<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransferRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'from_user_id' => 'required|numeric',
			'to_user_id' => 'required|numeric',
			'amount' => 'required|numeric',
			'status' => 'required|string',
			'status_note' => 'nullable|string',
			
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'from_user_id' => trans('inputs.from_user_id'),
			'to_user_id' => trans('inputs.to_user_id'),
			'amount' => trans('inputs.amount'),
			'status' => trans('inputs.status'),
			'status_note' => trans('inputs.status_note'),
			
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        //
    }
}
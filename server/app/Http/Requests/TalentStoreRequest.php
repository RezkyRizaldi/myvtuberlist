<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class TalentStoreRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'slug' => ['required', 'string', 'unique:talent,slug'],
            'original_name' => ['string', 'nullable'],
            'nicknames' => ['string', 'nullable'],
            'description' => ['string', 'nullable'],
            'images_url' => ['image', 'mimes:jpg,png,jpeg,gif,svg,webp', 'max:2048', 'nullable'],
            'debuted_at' => ['date', 'nullable'],
            'status' => ['string', 'nullable'],
            'gender' => ['string', 'nullable'],
            'age' => ['integer', 'nullable'],
            'birthday' => ['date', 'nullable'],
            'height' => ['integer', 'nullable'],
            'emoji' => ['string', 'nullable'],
            'affiliation_id' => ['integer', 'required'],
            'branch_id' => ['integer', 'required'],
            'generation_id' => ['integer', 'required'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = $validator->errors();
        $data = [
            'success' => false,
            'message' => 'Validation error.',
        ];

        if (! empty($errors)) {
            $data['errors'] = $errors->messages();
        }

        $response = response()->json($data, JsonResponse::HTTP_UNPROCESSABLE_ENTITY);

        throw new HttpResponseException($response);
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->name),
        ]);
    }
}

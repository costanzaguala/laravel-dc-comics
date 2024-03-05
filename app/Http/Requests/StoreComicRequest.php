<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:32',
            'description' => 'nullable|max:1024',
            'thumb' => 'nullable|url|max:1024',
            'price' => 'required|numeric|min:1|max:5000',
            'series' => 'nullable|max:64',
            'sale_date' => 'nullable|date',
            'type' => 'required|max:32',
            'artists' => 'required',
            'writers' => 'required',
        ];
    }
}
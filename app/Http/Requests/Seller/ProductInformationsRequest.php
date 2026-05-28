<?php

namespace App\Http\Requests\Seller;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ProductInformationsRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'product_ar_name' => ['required','string'],
            'product_en_name' => ['required','string'],
            'brand' => ['required','string'],
            'palce_of_origin' => ['required','string'],
            'description' => ['required','string'],
            'price' => ['required'],
            'discount_price' => ['required'],
            'available_quantity' => ['required'],
            'minimum_order' => ['required'],
            'production_date' => ['required'],
            'expiry_date' => ['required'],
            'shelf_life' => ['required'],
            'hours' => ['required'],
            'product_image' => ['required'],
            'product_video' => ['sometimes'],
            'quest_1' => ['string'],
            'quest_2' => ['string'],
            'quest_3' => ['string'],


            'delivery_id' => ['nullable','array'],
        'delivery_id.*' => 'exists:categories,id', 

        ];
    }
}

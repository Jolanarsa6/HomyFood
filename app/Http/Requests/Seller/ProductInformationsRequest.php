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
            'product_ar_name' => ['sometimes'],
            'product_en_name' => ['sometimes'],
            'brand' => ['sometimes'],
            'palce_of_origin' => ['sometimes'],
            'description' => ['sometimes'],
            'price' => ['sometimes'],
            'discount_price' => ['sometimes'],
            'available_quantity' => ['sometimes'],
            'minimum_order' => ['sometimes'],
            'production_date' => ['sometimes'],
            'expiry_date' => ['sometimes'],
            'shelf_life' => ['sometimes'],
            'hours' => ['sometimes'],
            'product_image' => ['sometimes'],
            'product_video' => ['sometimes'],
            'quest_1' => ['string'],
            'quest_2' => ['string'],
            'quest_3' => ['string'],


            'delivery_id' => ['nullable', 'array'],
            'delivery_id.*' => 'exists:categories,id',

        ];
    }
}

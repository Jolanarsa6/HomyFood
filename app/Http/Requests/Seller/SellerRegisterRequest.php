<?php

namespace App\Http\Requests\Seller;

use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class SellerRegisterRequest extends FormRequest
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
            'full_name' => ['sometimes', 'string', 'max:255'],
            'phone' => ['sometimes', 'string', 'min:10', 'max:30'],
            'email' => ['sometimes', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['sometimes', 'confirmed', Rules\Password::defaults()],
            // 'account_type' => ['sometimes', 'in:buyer,seller'],
       
            

            'birthdate' => ['sometimes', 'date', 'string'],
            'country' => ['sometimes', 'string'],
            'city' => ['sometimes'],
            'town' => ['sometimes'],
            'address' => ['sometimes'],
            'product_type' => ['sometimes'],
            'capability' => ['sometimes'],
            'bank_name' => ['sometimes'],
            'IBAN' => ['sometimes'],
            'id_number' => ['sometimes'],
            'username' => ['sometimes'],
            'id_image_front' => ['sometimes'],
            'id_image_back' => ['sometimes'],
            'terms_data' => ['sometimes'],
            'agree' => ['sometimes'],
        ];
    }
}

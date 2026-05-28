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
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:10', 'max:30'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // 'account_type' => ['required', 'in:buyer,seller'],
       
            

            'birthdate' => ['required', 'date', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required'],
            'town' => ['required'],
            'address' => ['required'],
            'product_type' => ['required'],
            'capability' => ['required'],
            'bank_name' => ['required'],
            'IBAN' => ['required'],
            'id_number' => ['required'],
            'username' => ['required'],
            'id_image_front' => ['required'],
            'id_image_back' => ['required'],
            'terms_data' => ['required'],
            'agree' => ['required'],
        ];
    }
}

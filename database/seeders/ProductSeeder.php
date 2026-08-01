<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        set_time_limit(0);

        $response = Http::get('https://themealdb.com');

        if ($response->successful() && isset($response->json()['meals'])) {
            $meals = $response->json()['meals'];

            foreach ($meals as $mealItem) {
                $detailResponse = Http::get("https://themealdb.com" . $mealItem['idMeal']);
                
                if ($detailResponse->successful() && isset($detailResponse->json()['meals'][0])) {
                    $meal = $detailResponse->json()['meals'][0];

                    $food = Product::create([
                        'food_title'       => $meal['strMeal'],         // Maps API title to your column
                        'meal_description' => $meal['strInstructions'], // Maps API instructions to your column
                        'food_category'    => $meal['strCategory'],     // Maps API category to your column
                        'origin_country'   => $meal['strArea'],         // Example of mapping another column
                        'price'            => rand(10, 45),             // Since APIs don't have prices, generate a random price
                    ]);

                    if (!empty($meal['strMealThumb'])) {
                        $food->addMediaFromUrl($meal['strMealThumb'])
                             ->toMediaCollection('product_images');
                    }
                }
            }
        }
        
    }
}

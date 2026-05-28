<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('product_ar_name');
            $table->string('product_en_name');
            $table->string('brand');
            $table->string('palce_of_origin');
            $table->text('description');
            $table->decimal('price');
            $table->decimal('discount_price');
            $table->decimal('available_quantity');
            $table->decimal('minimum_order');
            $table->date('production_date');
            $table->date('expiry_date');
            $table->integer('shelf_life');
            $table->integer('hours');
            $table->string('product_image');
            $table->string('product_video')->nullable();
            $table->string('quest_1');
            $table->string('quest_2');
            $table->string('quest_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

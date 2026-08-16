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
            $table->string('product_ar_name')->nullable();
            $table->string('product_en_name')->nullable();
            $table->string('brand')->nullable();
            $table->string('palce_of_origin')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('discount_price')->nullable();
            $table->decimal('available_quantity')->nullable();
            $table->decimal('minimum_order')->nullable();
            $table->date('production_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->integer('shelf_life')->nullable();
            $table->integer('hours')->nullable();
            $table->string('product_image')->nullable();
            $table->string('product_video')->nullable();
            $table->string('quest_1')->nullable();
            $table->string('quest_2')->nullable();
            $table->string('quest_3')->nullable();
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

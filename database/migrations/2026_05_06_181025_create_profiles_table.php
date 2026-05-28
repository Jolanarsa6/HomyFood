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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->date('birthdate')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('town');
            $table->string('address');
            $table->string('product_type');
            $table->decimal('capability');
            $table->string('bank_name');
            $table->string('IBAN');
            $table->string('id_number');
            $table->string('username');
            $table->string('id_image_front');
            $table->string('id_image_back');
            $table->enum('terms_data' , ['on','off']);
            $table->enum('agree' , ['on','off']);        
            $table->date('terms_accepted_at');
            $table->double('terms_version');
            $table->string('ip_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};

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
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('town')->nullable();
            $table->string('address')->nullable();
            $table->string('product_type')->nullable();
            $table->decimal('capability')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('IBAN')->nullable();
            $table->string('id_number')->nullable();
            $table->string('username')->nullable();
            $table->string('id_image_front')->nullable();
            $table->string('id_image_back')->nullable();
            $table->enum('terms_data' , ['on','off'])->nullable();
            $table->enum('agree' , ['on','off'])->nullable();        
            $table->date('terms_accepted_at')->nullable();
            $table->double('terms_version')->nullable();
            $table->string('ip_address')->nullable();
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

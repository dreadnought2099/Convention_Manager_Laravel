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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Added the 'name' column
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();  // Added 'email_verified_at' column
            $table->string('password');
            $table->rememberToken();  // Added 'remember_token' column
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');  // Uncommented to drop 'users' table
    }
};

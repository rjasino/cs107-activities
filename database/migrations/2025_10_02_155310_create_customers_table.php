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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();   //primary key, auto_increment
            $table->string('username', 50)->unique();
            $table->string('email', 100)->unique();
            $table->string('password_hash', 255);
            $table->string('first_name', 50);   //snake case
            $table->string('last_name', 50);
            $table->date('date_of_birth')->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->text('address')->nullable();    //full address
            $table->softDeletes();  //deleted_at
            $table->timestamps();   //created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

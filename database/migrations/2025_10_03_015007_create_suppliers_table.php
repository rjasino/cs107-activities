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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('supplier_name', 100);
            $table->string('contact_person', 100);
            $table->string('email', 150)->unique();
            $table->string('phone', 20);
            $table->text('address')->nullable();
            $table->boolean('is_active')->default(true);
            $table->softDeletes();  //deleted_at
            $table->timestamps();   //created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};

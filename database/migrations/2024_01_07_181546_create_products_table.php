<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('product_name');
        $table->text('description')->nullable();
        $table->decimal('price', 10, 2);
        $table->string('image_url')->nullable();
        $table->enum('type', ['Joki Rank', 'Joki Classic', 'Joki MCL', 'Paket Joki']); // Pilihan untuk field "type"
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

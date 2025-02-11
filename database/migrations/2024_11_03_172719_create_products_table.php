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
            $table->string('product_id')->unique(); // String, required, unique
            $table->string('name'); // String, required
            $table->text('description')->nullable(); // Text, optional
            $table->decimal('price', 10, 2); // Decimal, required
            $table->integer('stock')->nullable(); // Integer, optional
            $table->string('image')->nullable(); // String, optional
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
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

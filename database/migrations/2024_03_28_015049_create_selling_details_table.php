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
        Schema::create('selling_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('selling_id');
            $table->bigInteger('product_id');
            $table->decimal('subtotal', 15,2);
            $table->integer('total_product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('selling_details');
    }
};

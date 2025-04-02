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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('least_number');
            $table->string('barcode');
            // $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('category');
            // $table->unsignedBigInteger('vendor_id');
            // $table->foreign('vendor_id')->references('id')->on('vendor');
            $table->foreignId('category_id')->constrained('category');
            $table->foreignId('vendor_id')->constrained('vendor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};

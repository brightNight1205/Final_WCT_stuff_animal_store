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
        Schema::create('product_singles', function (Blueprint $table) {
            $table->id('product_single_id');
            $table->unsignedBigInteger('product_detail_id');
            $table->text('description');
            $table->string('size');
            $table->integer('quantity');
            $table->string('color');
            $table->unsignedBigInteger('customize_id');
            $table->timestamps();

            $table->foreign('product_detail_id')
                ->references('product_detail_id')
                ->on('product_details')
                ->onDelete('cascade');

            $table->foreign('customize_id')
                ->references('id') // use 'id' if 'customizes' uses $table->id();
                ->on('customizes')
                ->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_singles');
    }
};

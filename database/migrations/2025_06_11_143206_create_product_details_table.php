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
    Schema::create('product_details', function (Blueprint $table) {
    $table->id('product_detail_id');
    $table->string('name');
    $table->decimal('discount', 8, 2)->nullable();
    $table->decimal('cost', 8, 2);
    $table->unsignedBigInteger('category_animal_id');
    $table->unsignedBigInteger('available_status_id');
    $table->string('image');
    $table->timestamps();

    $table->foreign('category_animal_id')
          ->references('category_animal_id')
          ->on('category_animals')
          ->onDelete('cascade');

    $table->foreign('available_status_id')
          ->references('available_id')
          ->on('availables')
          ->onDelete('cascade');
});

}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};

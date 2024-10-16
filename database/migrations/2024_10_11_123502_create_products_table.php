<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id')->nullable();
            $table->bigInteger('category_id')->nullable();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->string('price')->nullable();
            $table->string('stock_status')->nullable()->comment('1=Available, 2=Not Available');
            $table->string('status')->comment('1=Active, 0=Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

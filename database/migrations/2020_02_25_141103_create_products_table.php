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
            $table->bigIncrements('id');
            $table->integer('catagory_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->string('slug');
            $table->integer('quantity')->default(1);
            $table->integer('price');
            $table->tinyinteger('status')->default(0);
            $table->integer('oder_price')->nullable();
            $table->integer('admin_id');
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

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
            $table->increments('id');
            $table->string('name', 200);
            $table->float('price', 10,2);
            $table->float('sale_price', 10,2);
            $table->string('image')->nullable();
            $table->text('image_list')->nullable();
            $table->text('desr')->nullable();
            $table->integer('category_id')->unsigned();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_category_id_foreign');
        });

        Schema::dropIfExists('products');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_desc')->nullable();
            $table->text('desc');
            $table->decimal('reg_price');
            $table->decimal('sale_price')->nullable();
            $table->string('sku');
            $table->enum('stock_status', ['instock', 'outofstok']);
            $table->boolean('featured')->default(false);
            $table->unsignedInteger('quantity')->default(10);
            $table->string('img')->nullable();
            $table->text('gallery')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
};

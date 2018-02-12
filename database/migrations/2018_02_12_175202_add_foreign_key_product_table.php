<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->foreign('category_id', 'fk_category_product')->references('id')->on('category')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('brand_id', 'fk_brand_product')->references('id')->on('brand')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('fk_category_product');
            $table->dropForeign('fk_brand_product');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('spa_id');
            $table->integer('service_id');
            $table->string('name_service');
            $table->string('price_service');
            $table->string('discount');
            $table->text('detail_service');
            $table->string('image_service');
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
        Schema::dropIfExists('service_detail');
    }
}

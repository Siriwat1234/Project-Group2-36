<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContent1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content1s', function (Blueprint $table) {
            $table->bigIncrements('id_content1s');
            $table->string('name',200);
            $table->string('image');
            $table->text('description');
            $table->string('price',5);
            $table->integer('id_categorys');
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
        Schema::dropIfExists('content1s');
    }
}

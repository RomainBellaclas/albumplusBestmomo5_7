<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeobjectifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeobjectif', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lettre')->unique();
            $table->string('slug')->unique();
            $table->text('libellé')->nullable();
            $table->integer('grossMin')->nullable();
            $table->integer('grossMax')->nullable();
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
        Schema::dropIfExists('typeobjectif');
    }
}

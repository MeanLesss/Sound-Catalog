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

        Schema::create('soundCate', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('soundId')->unsigned();
            $table->foreign('soundId')
                ->references('id')->on('sounds')->onDelete('cascade');

            $table->bigInteger('categoryId')->unsigned();
            $table->foreign('categoryId')
                ->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('sound_cates');
    }
};

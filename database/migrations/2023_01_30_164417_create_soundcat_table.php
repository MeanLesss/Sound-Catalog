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
        Schema::create('sounds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')
                ->references('id')->on('users')->onDelete('cascade');
            $table->string('title', 100)->unique();
            $table->string('description', 255)->nullable();
            $table->string('soundPath', 255);
            $table->string('imagePath', 255)->nullable();
            $table->boolean('statusApprove');
            $table->timestamps();
        });
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('tagName', 50)->unique();
            $table->timestamps();
        });
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
        Schema::create('complain', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId')->unsigned();
            $table->foreign('userId')
                ->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('soundId')->unsigned();
            $table->foreign('soundId')
                ->references('id')->on('sounds')->onDelete('cascade');
            $table->string('description', 255);
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
        Schema::dropIfExists('sounds');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('soundCate');
    }
};

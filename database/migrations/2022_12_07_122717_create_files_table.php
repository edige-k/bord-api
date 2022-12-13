<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('Наименование');
            $table->tinyInteger('type')->nullable()->comment('Тип файла');
            $table->string('mime', 255);
            $table->string('ext', 255);
            $table->integer('size');
            $table->string('url', 500);
            $table->unsignedBigInteger('fileable_id');
            $table->string('fileable_type', 50);
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
        Schema::dropIfExists('files');
    }
}

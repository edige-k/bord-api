<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->date('starts_at')->comment('Дата начала акции');
            $table->date('ends_at')->comment('Дата окончания акции');
            $table->tinyInteger('status');
            $table->dateTime('send_at')
                ->nullable()
                ->default(null)
                ->comment('Дата отправления');
            $table->unsignedBigInteger('newsable_id');
            $table->string('newsable_type', 50);
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
        Schema::dropIfExists('news');
    }
}

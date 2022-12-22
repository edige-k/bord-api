<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('phone',12);
            $table->string('name',50);
            $table->string('lastname',50);
            $table->string('email')->unique();
            $table->string('male');
            $table->string('friend_code',6)->nullable();
            $table->unsignedDouble('bonus')->default(0)->comment('Сумма');

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
        Schema::dropIfExists('clients');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsconfirmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientsconfirm', function (Blueprint $table) {
            $table->id();
            $table->string('code', 4);
            $table->string('description', 500)->nullable();
            $table->enum('status', ['used', 'not_used'])->default('not_used')->index();
            $table->string('clientsconfirmable_type', 500)->index();
            $table->unsignedBigInteger('clientsconfirmable_id')->index();
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
        Schema::dropIfExists('clientsconfirm');
    }
}

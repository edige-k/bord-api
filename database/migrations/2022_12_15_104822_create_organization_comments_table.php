<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization_id')
                ->comment('Идентификатор организация')
                ->constrained()
                ->restrictOnDelete();
            $table->foreignId('client_id')
                ->comment('Идентификатор клиента')
                ->constrained()
                ->restrictOnDelete();
            $table->text('body')->comment('Комментарий');
            $table->tinyInteger('rating')->comment('Рейтинг');
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
        Schema::dropIfExists('organization_comments');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKindOrganizationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kind_organization', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kind_id')->constrained();
            $table->foreignId('organization_id')->constrained();
            $table->unsignedBigInteger('position')->nullable()->index()->comment('Позиция');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kind_organization');
    }
}

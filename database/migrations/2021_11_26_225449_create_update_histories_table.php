<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('update_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('crime_id');
            $table->foreign('crime_id')->references('c_id')->on('complaints');
            $table->string('p_status')->default('Unassigned');
            $table->string('p_info')->default('Unassigned');
            $table->string('c_status')->default('Unassigned');
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
        Schema::dropIfExists('update_histories');
    }
}

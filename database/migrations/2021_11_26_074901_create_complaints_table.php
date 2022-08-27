<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('c_id');
            $table->string('report_by');
            $table->string('c_type');
            $table->string('c_loc');
            $table->mediumText('desc');
            $table->string('p_status')->default('Unassigned');
            $table->string('p_info')->default('Unassigned');
            $table->string('c_status')->default('Unsolved');
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
        Schema::dropIfExists('complaints');
    }
}

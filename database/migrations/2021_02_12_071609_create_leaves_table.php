<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('employee_id')->unsigned();
			$table->integer('leave_id')->unsigned();
			$table->date('l_start');
			$table->date('l_end');
			$table->string('status');
			$table->string('note');
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
        Schema::dropIfExists('leaves');
    }
}

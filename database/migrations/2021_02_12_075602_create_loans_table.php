<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('employee_id')->unsigned();
			$table->double('loan_amount');
			$table->integer('months_pay');
			$table->double('total');
			$table->double('balance');
			$table->string('status');
			$table->longText('note');
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
        Schema::dropIfExists('loans');
    }
}

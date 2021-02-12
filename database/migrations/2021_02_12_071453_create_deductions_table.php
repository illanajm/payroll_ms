<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deductions', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('employee_id')->unsigned();
			$table->string('con_type');
			$table->string('base_range');
			$table->double('monthly_con');
			$table->double('employee_share');
			$table->double('employer_share');
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
        Schema::dropIfExists('deductions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaveTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_types', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('leaves_id')->unsigned()->index();
			$table->string('leave_type');
			$table->integer('allowed_day');
			$table->string('pay');
			$table->longText('description');
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
        Schema::dropIfExists('leave__types');
    }
}

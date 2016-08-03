<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars_offers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('country_id');
			$table->integer('city_id');
			$table->integer('brand_id');
			$table->integer('model_id');
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
		Schema::drop('cars_offers');
	}

}

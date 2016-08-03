<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('settings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('site_name_ar');
			$table->string('site_name_en');
			$table->text('site_desc_ar');
			$table->text('site_desc_en');
			$table->text('site_tags_ar');
			$table->text('site_tags_en');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('google_Plus');
			$table->string('youtube');
			$table->string('linkedIn');
			$table->integer('site_status');
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
		Schema::drop('settings');
	}

}

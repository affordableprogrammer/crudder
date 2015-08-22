<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id', true, true);
			$table->smallInteger('status');
			$table->string('taxid', 255);
			$table->string('activation_code', 255);
			$table->boolean('active_subscription');
			$table->string('company', 255);
			$table->string('title', 255);
			$table->string('salutation', 255);
			$table->string('email', 255);
			$table->string('telephone', 255);
			$table->string('fax', 255);
			$table->string('website', 255);
			$table->date('birthday');
			$table->text('bio');
			$table->string('street', 255);
			$table->string('street_additional', 255);
			$table->string('city', 255);
			$table->string('state', 255);
			$table->string('zipcode', 255);
			$table->string('country', 255);
			$table->string('lat', 255);
			$table->string('long', 255);
			$table->string('billing_street', 255);
			$table->string('billing_street_additional', 255);
			$table->string('billing_city', 255);
			$table->string('billing_state', 255);
			$table->string('billing_zipcode', 255);
			$table->string('billing_country', 255);
			$table->string('pic', 255);
			$table->integer('age', true);
			$table->string('twitter_username', 255);
			$table->string('googleplusurl', 255);
			$table->string('facebookurl', 255);
			$table->date('last_active');
			$table->dateTime('last_seen');
			$table->date('inactive_for');
			$table->dateTime('created_at');
			$table->dateTime('updated_at');
			$table->dateTime('deleted_at');
			$table->integer('user_id', true);
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
		Schema::drop('profiles');
	}

}

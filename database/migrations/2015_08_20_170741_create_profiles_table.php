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
			$table->smallInteger('status')->default('1');
			$table->string('taxid', 32)->nullable();
			$table->string('activation_code')->nullable();
			$table->boolean('active_subscription')->nullable();
			$table->string('company', 100)->nullable();
			$table->string('title', 64)->nullable();
			$table->string('salutation', 8)->nullable();

			$table->string('email')->unique();
			$table->string('telephone', 25);
			$table->string('fax', 25)->nullable();
			$table->string('website')->nullable();
			$table->date('birthday')->nullable();
			$table->mediumText('bio')->nullable();
			$table->string('street')->nullable();
			$table->string('street_additional', 45)->nullable();
			$table->string('city', 45)->nullable();
			$table->string('state')->nullable();
			$table->string('zipcode', 11)->nullable();
			$table->string('country')->default('United States')->nullable();
			$table->string('lat')->nullable();
			$table->string('long')->nullable();
			$table->string('billing_street')->nullable();
			$table->string('billing_street_additional', 45)->nullable();
			$table->string('billing_city', 45)->nullable();
			$table->string('billing_state')->nullable();
			$table->string('billing_zipcode', 11)->nullable();
			$table->string('billing_country')->default('United States');
			$table->string('pic')->nullable();
			$table->integer('age')->unsigned();
			$table->string('twitter_username')->nullable();
			$table->string('googleplusurl')->nullable();
			$table->string('facebookurl')->nullable();
			$table->date('last_active');
			$table->dateTime('last_seen');
			$table->date('inactive_for');
			$table->timestamps();
			$table->softDeletes();


			$table->engine = 'InnoDB';
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;

			$table->index('status');
			$table->index('city');
			$table->index('state');
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

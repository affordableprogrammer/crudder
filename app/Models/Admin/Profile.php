<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model as Model;

class Profile extends Model
{
    
	public $table = "profiles";
    

	public $fillable = [
	    "id",
		"status",
		"taxid",
		"activation_code",
		"active_subscription",
		"company",
		"title",
		"salutation",
		"email",
		"telephone",
		"fax",
		"website",
		"birthday",
		"bio",
		"street",
		"street_additional",
		"city",
		"state",
		"zipcode",
		"country",
		"lat",
		"long",
		"billing_street",
		"billing_street_additional",
		"billing_city",
		"billing_state",
		"billing_zipcode",
		"billing_country",
		"pic",
		"age",
		"twitter_username",
		"googleplusurl",
		"facebookurl",
		"last_active",
		"last_seen",
		"inactive_for",
		"created_at",
		"updated_at",
		"deleted_at",
		"user_id"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
		"taxid" => "string",
		"activation_code" => "string",
		"active_subscription" => "boolean",
		"company" => "string",
		"title" => "string",
		"salutation" => "string",
		"email" => "string",
		"telephone" => "string",
		"fax" => "string",
		"website" => "string",
		"bio" => "string",
		"street" => "string",
		"street_additional" => "string",
		"city" => "string",
		"state" => "string",
		"zipcode" => "string",
		"country" => "string",
		"lat" => "string",
		"long" => "string",
		"billing_street" => "string",
		"billing_street_additional" => "string",
		"billing_city" => "string",
		"billing_state" => "string",
		"billing_zipcode" => "string",
		"billing_country" => "string",
		"pic" => "string",
		"age" => "integer",
		"twitter_username" => "string",
		"googleplusurl" => "string",
		"facebookurl" => "string",
		"user_id" => "integer"
    ];

	public static $rules = [
	    
	];

}

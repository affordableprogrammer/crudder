<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model
{
    
	public $table = "users";
    

	public $fillable = [
	    "id",
		"name",
		"firstname",
		"lastname",
		"username",
		"email",
		"password",
		"remember_token",
		"created_at",
		"updated_at"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
		"name" => "string",
		"firstname" => "string",
		"lastname" => "string",
		"username" => "string",
		"email" => "string",
		"password" => "string",
		"remember_token" => "string"
    ];

	public static $rules = [
	    
	];

}

<?php namespace App;


use Illuminate\Database\Eloquent\Model;


class Products extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'price','quantity', 'description','status'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	/* static function getStudents(){
		 
		 return $users = DB::table($table)->get();
		 }*/

}

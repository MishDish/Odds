<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Types extends Model {

	protected $fillable = [
		'title'		
	];
	public function odds()
	{
		return $this->hasMany("App\Odds");
	}
}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Odds extends Model {

	protected $fillable = [

		'title',
		'value',
		'types_id'

	];

	public function types()
	{
		return $this->belongsTo("App\Types");
	}

	public function user()
	{
		return $this->belongsTo("App\User");
	}

}

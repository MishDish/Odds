<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Odds as Odds;

class OddsTableSeeder extends Seeder {
	
	public function run()
	{
		foreach(range(1,1) as $index)
		{
			Odds::create([
				'title' => 'grktest',
				'value' => 2,
				'types_id' => 1,
				'user_id' => 1
				]);
		}
	}
}
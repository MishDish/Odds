<?php  namespace App\Repos;

use Auth;
use App\Odds;

class DbOddsRepo implements OddsRepoInterface{

	public function getPaginated(array $params)
	{
        if(\Request::get('sortBy')){
		return  Auth::user()->odds()->where('types_id',$params['sortBy'])->paginate(3);
	    }
		return Auth::user()->odds()->paginate(3);

	}

}
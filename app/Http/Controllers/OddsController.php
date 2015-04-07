<?php namespace App\Http\Controllers;

use App;
use Auth;
use App\Http\Requests;
use App\Odds;
use App\Types;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Html\HtmlBuilder;
use App\Http\Requests\OddsRequest;
use App\Http\Requests\TypesRequest;
use App\Repos\DbOddsRepo; 
use App\Helpers;

class OddsController extends Controller {

   /* protected $oddsRepo;

    public function __construct(OddsRepoInterface $oddsRepo)
   {

    $this->oddsRepo = $oddsRepo;

  }*/
   public function __construct()
   {
     $this->middleware('auth');
   }

   public function index(DbOddsRepo $oddsRepo)
   {  
 
      $user = Auth::user(); 
      $allTypes = Types::lists('title','id'); 
      // dd($type);   
      $types = array();
      foreach(Odds::all() as $type){
        $types[$type->types_id] = $type->types->title;
      }
      $sortBy = \Request::get('sortBy');
      $query = \Request::get('q');
      if(isset($query)) 
      {  
        $odds = Odds::where('title','LIKE',"%$query%")->paginate(1);
      }else{ 
        $odds = $oddsRepo->getPaginated(compact('sortBy'));
      }       
      return view('odds.odds',compact('odds','types','user','allTypes'));   
   } 

   public function store(OddsRequest $request)
   {	     
          Auth::user()->odds()->create($request->all());
          return redirect('/odds')->with('flash_message','You have successfully created new odd !');
   }
   public function destroy($id)
   {
         $odd = Odds::find($id);
         $odd->delete($id);
         return redirect('/odds')
                ->with('flash_message', 'You have successfully deleted this item!');
   }
   public function edit(Odds $odd,$id)
   {
      $odd = Odds::find($id);
      $types = array();
      $types = Types::lists('title','id');
      $user = Auth::user();
     return view('odds.edit',compact('odd','types','user'));
   } 

   public function update(OddsRequest $request, Odds $odd,$id)
   {
      Odds::find($id)->update($request->all());
      return redirect('/odds');
   }
   
}

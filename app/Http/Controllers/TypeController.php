<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Types;
use Request;
use App\Http\Requests\TypeRequest;
// use Illuminate\Http\Request;

class TypeController extends Controller {

 public function index()
   {
      $user = \Auth::user();
      $types = Types::paginate(10);
      return view('types.types',compact('types','user'));
   }

  public function store(TypeRequest $request)
  {
  	      Types::create($request->all());
  	      return redirect('/types')
  	      		 ->with('flash_message', 'New Type is added !');
  }

  public function edit(Types $type, $id)
  {   
      $type = Types::find($id);
      return view('types.edit', compact('type'));
  } 

  public function update(TypeRequest $request,Types $type, $id)
  {
        Types::find($id)->update($request->all());
        return redirect('/types');
  } 

  public function destroy()
  {
  	   $input = Request::get('id');
  	   $type = Types::find($input);
  	   $type->delete($input);
  	   return redirect('/types')->with('flash_message', 'You have successfully deleted this item!');
  } 

}

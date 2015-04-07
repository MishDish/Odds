<table id ="types-table" class="table table-condensed"> 					
	<tr class="info">
		<th class="warning">ID</th>
		<th class="success">NAME</th>
	</tr>
	@foreach($types as $type)	
	<tr>
	    {!! Form::open(['method' => 'DELETE','action' => ['TypeController@destroy',$type->id]]) !!}
	  	<td class="warning id-row">
	  	   {{ $type->id }} 
	  	   {!!Form::hidden('id', $type->id ,['id' => 'odd_type_id'] )!!}
	  	   {!! Form::submit('--',['class' => 'btn btn-primary field-btn del-field'])!!}	  	   
	    </td> 
	    {!! Form::close() !!}
		  <td class="success">
		   {{ $type->title }}
		  <a href="/types/{{$type->id}}/edit"><button type="button" class="btn btn-primary field-btn"><i class="glyphicon glyphicon-pencil"></i></button><a/></td>
	</tr>		  
	@endforeach

 </table>
 {!! $types->render() !!}

<table id ="types-table" class="table table-condensed"> 					
	<tr class="info">
		<th class="warning">ID</th>
		<th class="success">NAME</th>
	</tr>
	<tr>
	    {!! Form::model($type,['method' => 'PATCH','action' => ['TypeController@update',$type->id]])!!}
	  	<td class="warning id-row">
	      {{ $type->id }}
	    </td> 	   
		<td class="success">
		  {!! Form::text('title',null,['placeholder' => $type->title ]) !!}
		  {!! Form::submit('submit', ['class' => 'btn btn-primary field-btn'])!!}
		</td>
		{!! Form::close() !!}
	</tr>		  

 </table>
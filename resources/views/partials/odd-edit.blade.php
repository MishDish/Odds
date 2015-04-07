<table  id="odds-table" class="table table-condensed">
    <tr class="active">    
		<th class="active">ID</th>
		<th class="danger">NAME</th>
		<th class="warning">VALUE</th>
		<th class="info"><span>TYPE</span></th>
	</tr>	
	  <tr>
	   {!! Form::model($odd,['method' => "PATCH" ,'action' => ['OddsController@destroy',$odd->id]]) !!}
	   <td class="active id-row">{{ $odd->id }}	
       </td>       
	   <td class="danger">{!! Form::text('title',null, ['placeholder' =>  $odd->title]) !!}</td>
	   <td class="warning"><input type="number" name="value" id="value" step='0.01' placeholder="{{ $odd->value }}"></td>
	   <td class="info">
	   {!! Form::select('types_id',$types) !!}
	   {!! Form::submit('submit',['class' => 'btn btn-primary field-btn del-field']) !!}
	   </td>
	   {!! Form::close() !!}
	  </tr>
</table>	
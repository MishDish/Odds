
<table  id="odds-table" class="table table-condensed">
    <tr class="active">
    
		<th class="active">ID</th>
		<th class="danger">{!! sort_odds_by('title','Name') !!}</th>
		<th class="warning">VALUE</th>
		<th class="info"><span>TYPE</span>
	
		{!! Form::open(['method' => 'GET' ,'id' => "filter-form"])!!}
		{!! Form::select('sortBy', ['default' =>'Please Select']+$types,null, ['onchange' => 'this.form.submit()' ,'id' => 'yes']) !!}
		{!! Form::close()!!}
		<!--place for SELECT FORM --></th>
	</tr>	
	  @foreach($odds as $odd)
	  <tr>
	   {!! Form::open(['method' => "DELETE" ,'action' => ['OddsController@destroy',$odd->id]]) !!}
	  <td class="active id-row">{{ $odd->id }}
	  {!!Form::hidden('id', $odd->id, ['id' => 'odd_id']) !!}
	  {!! Form::submit('--',['class' => 'btn btn-primary field-btn del-field']) !!}		
      </td>
       {!! Form::close() !!}
	  <td class="danger">{{ $odd->title}} </td>

	  <td class="warning">{{ $odd->value }}</td>

	  <td class="info">{{ $odd->types->title }}<a href='/odds/{{$odd->id}}/edit'><button  type="button" class="btn btn-primary field-btn"><i class="glyphicon glyphicon-pencil"></i></button></a>
	  </td>
	  
	  </tr>
	  @endforeach

</table>
{!! $odds->render() !!}	

 
 

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			    <div class="modal-header">
			        <h4 class="modal-title">Add New</h4>
			    </div>
		     	<div class="modal-body" >
		     	 <div id="add-odds">
                  
				   <div class="form-group large">	
				   		{!! Form::open(['action' => 'OddsController@store']) !!}
				   		{!! Form::label('title','Name :') !!}
				   		{!! Form::text('title' , null, ['class' => 'form-control input-lg' ,'id' => 'oddName' , 'placeholder' => 'Name ' ]) !!}
				   		{!! Form::label('value' ,'Value : ')!!}
				   		 <input class="form-control input-lg" name="value" id="value" type="number"  step="0.01" placeholder="Value">
					</div>		

				     <div class="form-group large">
				   		{!! Form::label('types_id','Select Odd Type :') !!}
				   		{!! Form::select('types_id', ['default' => 'Please Select']+$allTypes , null, ['class' => 'form-control type-select']) !!}
					 </div>
						
					 <div class="modal-footer">
						{!! Form::submit('Insert', ['class' => 'btn btn-primary']) !!}
					 </div> 
					 {!! Form::close() !!}
					 </div>	<!--add-odds-->
					</div><!--model-body-->
		 </div><!--model content-->
	</div><!--model dialog -->
</div><!--modal fade-->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			    <div class="modal-header">
			        <h4 class="modal-title">Add New</h4>
			    </div>
		     	<div class="modal-body" >
		     	 <div id="add-odds">
	     	 	  {!!Form::open(['action' => 'TypeController@store'])!!}
				 <div id="add-type" class=form-group large"">
				    {!! Form::label('title','Name :') !!}
			   		{!! Form::text('title' , null, ['class' => 'form-control input-lg' ,'id' => 'type-name' , 'placeholder' => 'Name ' ]) !!}
				 </div>
				</div><!--model-body-->
				<div class="modal-footer">
					{!! Form::submit('Insert', ['class' => 'btn btn-primary']) !!}
				</div>
			    {!! Form::close() !!}
			</div><!--add-odds-->
		 </div><!--model content-->	
	</div><!--model dialog -->
</div><!--modal fade-->

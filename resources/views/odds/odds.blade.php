@extends('odds.index')

@section('content')
<div class="container">
		 <div class="row">
				<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">
				  <h3 class="panel-title">ODDS MANAGAMENT</h3>
				  </div>
				   <!--  Panel Navigation -->
				   <div class="panel-body">
					  <nav>
					  <ul id="panels" class="nav nav-tabs">
						  <li id="odds-section" role="presentation" >
						  <a href="/odds">Odds</a>
						  </li>
						  <li id="types-section" role="presentation"  >
						  <a href="/types">Types</a>
						  </li>
			   		      <li id="search">	
						{!! Form::open(['method' => 'GET']) !!}
						{!! Form::input('search','q',null ,['class' => 'form-inline','placeholder' => 'Search...'])!!}
						{!! Form::close()!!}
			   		      </li>
					<button id="section-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="glyphicon glyphicon-plus"></i> Add New</button>
					  </ul>
					  </nav>  
					   			 <!--pop up modal boxes-->		
					      @include("partials.modal-odd")	 
					    								<!--pagination-->
                          			<!-- tables  -->
				          @include("partials.table-odd")	 
					  								<!-- pagination links -->
				      </div><!--panel body-->   
				</div><!--panel panel default -->			  
			</div>
		</div>
</section>
@stop		
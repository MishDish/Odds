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
					  @include('partials.odd-edit')
				    </div><!--panel body-->   
				</div><!--panel panel default -->			  
			</div>
		</div>
</section>    
@stop
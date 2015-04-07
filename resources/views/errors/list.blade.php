 
  	 @if($errors->any())
     <div class="alert alert-warning">
     <a href="#" class="close" data-dismiss="alert">&times;</a>
  	 <ul>
  	 	@foreach($errors->all() as $error)

  	 	   <li>{{ $error }}</li>
  	 	 @endforeach  
     </ul>
     </div>
      @elseif(Session::has('flash_message'))
      <div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert">&times;</a>
      <ul>
      	<li>{{ Session::get('flash_message')}}</li>
      </ul>  
      </div>  
     @endif 

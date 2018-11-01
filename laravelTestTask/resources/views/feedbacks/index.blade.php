@extends ('layouts.app')



@section('content')
 <!-- back button -->
<div class="back_btn pb-3 btn-lg">
	<a href="{{route('welcome')}}" class="btn btn-info">Back</a>
</div>
<!-- succesmsg -->
<div class="w100 text-center">
    @if (session('succesmsg'))
    <div class="alert alert-success">
        {{ session('succesmsg') }}
    </div>
  @endif
</div>
<!-- responsive table -->
<div class="table-responsive ">
			<table class="table table-dark rounded">
				  <thead>
				    <tr>


				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Feedback</th>
				      <th scope="col">Created by</th>
				      <th scope="col">Modify</th>
				      <th scope="col">Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				   
				    	@foreach($feedbacks as $feedback)
				    	 <tr>
							<th>{{$feedback->name}}</th>
							<td>{{$feedback->email}}</td>
							<td class="breack">{{$feedback->text}}</td>
							<td>{{$feedback->created_at}}</td>
							
							
						
							<td><a href="{{route('feedback.edit', $feedback->id)}}" class="btn btn-success">Modify</a></td>
							<td>
								<form action="{{route('feedback.destroy', $feedback->id)}}" method="post">

									{{method_field('DELETE')}}
    								{!! csrf_field() !!}
									<input type="submit" name="submit" value="Delete" class="btn btn-danger">
							    </form>
						   </td>
				      		

						 </tr>
				    	@endforeach

				     
				      
				      
				      
				      
				 
				   
				   
				  </tbody>
				</table>

	</div>




@endsection
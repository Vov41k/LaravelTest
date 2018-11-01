@extends ('layouts.app')



@section('content')

 <!-- succesmsg -->
<div class="w100 text-center">
    @if (session('succesmsg'))
    <div class="alert alert-success">
        {{ session('succesmsg') }}
    </div>
  @endif
</div>
<div class="row d-flex justify-content-center">
 

   
    <!-- list of feedbacks -->

    <!-- list of feedbacks -->

    <!-- form  -->
    <div class="col-xl-10  p-3 rounded bg-dark mt-3 justify-content-center">
        <h1 class="text-danger">Edit Feedback</h1>

          <form class="pt-2" action="{{route('feedback.update',$feedback->id)}}" method="post">
             {{ csrf_field() }}
              {{method_field('PATCH')}}
              <div class="form-group">
                    <label for="name" class="text-light">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name='name' value='{{$feedback->name}}' placeholder="Enter your name">
                  
              </div>
              @if($errors->has('name'))

                 <div class="text-center">
                     <p class="text-center text-danger">
                       {{$errors->first('name')}}
                     </p>
                                            
                 </div>
             @endif
              <div class="form-group">
                    <label for="email" class="text-light">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email"  value='{{$feedback->email}}'>
              </div>
               @if($errors->has('email'))

                 <div class="text-center">
                     <p class="text-center text-danger">
                       {{$errors->first('email')}}
                     </p>
                                            
                 </div>
               @endif
              <div class="form-group">
                <label for="text" class="text-light">Your Feedback</label>
                <textarea class="form-control" id="text" name="text" rows="5">{{$feedback->text}}</textarea>
              </div>
               @if($errors->has('text'))

                 <div class="text-center">
                     <p class="text-center text-danger">
                       {{$errors->first('text')}}
                     </p>
                                            
                 </div>
             @endif
              <button type="submit" class="btn btn-primary">Update</button>
           </form>
        
    </div>

    <!-- form -->
</div>







@endsection
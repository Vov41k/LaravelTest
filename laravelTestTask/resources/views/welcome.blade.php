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
<div class="row">
 

   
    <!-- list of feedbacks -->
    <div class="col-xl-4 p-3 bg-dark rounded mt-3" >
        <ul class="list-group text-left  scrollable pr-2">
          @if($feedbacks->isEmpty())
            <p class="text-light">
              You can leave you comments using form right
              from this message!
              <br>
              Also we provide possibility to modify and delete 
              message! 
              <br>
              Just Click the button under this text!
              <br>
              Thank You!
            </p>
          @endif
            @foreach($feedbacks as $feedback)
                 <li class="list-group-item  mt-3 bg-success" >
                   <span class="font-weight-bold">Name:</span>
                   <span class="badge badge-danger"">{{$feedback->name}}</span>

                   {{ ($feedback->created_at) }}
                   <br>

                    {{$feedback->text}}
                  
                    
                  </li>

           
             
             <br>


             @endforeach

         </ul>

         <!-- all reviews and editing -->
         <div class="reviews">
           <a href="{{route('feedback.index')}}" class="btn btn-danger btn-block mt-3">View reviews and modify</a>
         </div>
        
    </div>
    <!-- list of feedbacks -->

    <!-- form  -->
    <div class="col-xl-7 offset-xl-1 p-3 rounded bg-dark mt-3">
        <h1 class="text-light">Leave Your Feedback</h1>

          <form class="pt-2" action="{{route('feedback.store')}}" method="post">
             {{ csrf_field() }}
              <div class="form-group">
                    <label for="name" class="text-light">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name='name' placeholder="Enter your name">
                  
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
                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter your email">
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
                <textarea class="form-control" id="text" name="text" rows="5"></textarea>
              </div>
               @if($errors->has('text'))

                 <div class="text-center">
                     <p class="text-center text-danger">
                       {{$errors->first('text')}}
                     </p>
                                            
                 </div>
             @endif
              <button type="submit" class="btn btn-primary">Save</button>
           </form>
        
    </div>

    <!-- form -->
</div>







@endsection
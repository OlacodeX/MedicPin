@extends('layouts.maininner')

@section('content')
@include('inc.navmaininner')
@if (auth()->user()->status == 'Active')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Answers to Question</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Answers to Question</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebarinner')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="col-md-12">
   <div class="card">
      <div class="card-header">
         @if (auth()->user()->name == $question->asker_name)
             
         <h5 class="card-title">
            <a href="../questions/{{$question->id}}">
            <b>Your Question:</b>
            <span class="d-block text-info">{!!$question->created_at!!}</span></a>
         </h5>
         @else
         <h5 class="card-title">
            
            @if ($question->asker_identity == 'No')
            @php
                $anonymous = 'ANONYMOUS';
            @endphp
            <b>{!!$anonymous!!} Says:</b>
            @else
            <b>{{$question->asker_name}} Says:</b>
            @endif
            
         </h5>
         @endif
      </div>
      <div class="card-body">
      <p>{!!$question->question!!}</p>
      </div>
   </div>
</div>
<div class="col-md-12">
      <div class="card">
         <div class="card-header">
            <h5 class="card-title">
               <b>Answers</b>
            </h5>
         </div>
      <div class="card-body">
         @include('inc.messages')
                     
         @if (count($answers) > 0)
         <div class="iq-card-body p-0" style="padding-bottom: 0; background:transparent;">
         @foreach ($answers as $answer)
            @php
                $name = App\User::where('id', $answer->user_id)->first();
            @endphp
            <h6 class="title"><span>{{$name->name}}</span></h6>
            <small><i class="fa fa-calendar"></i> {!!$answer->created_at!!}</small>
            <p>{!!$answer->answer!!}
            @if (auth()->user()->id == $answer->user_id)
            <span class="user-list-files d-flex float-left">
            {!!Form::open(['action' => 'QuestionsController@edit_answer', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
            {{Form::hidden('id', $answer->id)}}
            <button type="submit" class ="btn bg-info-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Answer"><i class="fa fa-edit"></i> Edit Answer</button>
           
               {!!Form::close()!!}
                   {!!Form::open(['action' => 'QuestionsController@destroyy', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                  {{Form::hidden('id', $answer->id)}}
                  <button type="submit" class ="btn bg-danger-light btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Answer"><i class="fas fa-trash"></i> Delete Answer</button>
                 
                  {!!Form::close()!!}
            </span>
            @endif
         </p>

         </div>
             
       @endforeach

       @else
       @if (auth()->user()->role == 'Doctor')
       <p class="text-center">No answers yet, be the first to answer...</p> 
       @else
       <p class="text-center">No answers Yet, Kindly Check Back Later.</p>    
           
       @endif    
       @endif
      </div>
      </div>
</div>

       @if (auth()->user()->role == 'Doctor')
       <div class="col-md-12">
             <div class="card">
                <div class="card-header">
                   <h5 class="card-title">Answer Question</h5>
                </div>
      <div class="card-body">
       {!! Form::open(['action' => 'QuestionsController@store_answer', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
       **/ !!}
       {{Form::hidden('question_id', $question->id)}}
        <div class="form-group">
          {{Form::textarea('answer', '', ['class' => 'form-control', 'id' =>'pre'], 'required')}}
        </div>
        {{Form::submit('Answer', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
       {!! Form::close() !!}
      </div>
       @endif
     </div>
   </div>
     <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
     <script>
        CKEDITOR.replace( 'pre' );
     </script> 
</div>
</div>
</div>
</div>
</div>
@else
<div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
   <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
   <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>

</div>
@endif   

<!-- Footer 
<footer class="bg-white iq-footer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-6">
            <ul class="list-inline mb-0">
               <li class="list-inline-item"><a href="./privacy">Privacy Policy</a></li>
               <li class="list-inline-item"><a href="./terms">Terms of Use</a></li>
              </ul>
           </div>
           <div class="col-lg-6 text-right">
              Copyright 2020 <a href="./">Medicpin</a> All Rights Reserved.
         </div>
      </div>
   </div>
</footer>
Footer END -->
@endsection
@extends('layouts.maininner')
@section('content')
@include('inc.navmaininner')
         <div>
          <div class="">
    <div class="row" style="padding-bottom: 100px;padding-left:20px;">
    <div class="col-sm-9" style="text-align:justify;">
      <h3 class="title"><span>{{$message->sender_name}}</span></h3>
      <small><i class="fa fa-calendar"></i>{!!$message->created_at!!}</small>
      <hr>
      <p>{!!$message->message!!}</p>
      
      <h3 class="title">Reply <span>{{$message->sender_name}}</span></h3>
      {!! Form::open(['action' => 'MessagingController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
      **/ !!}
      @include('inc.messages')
       <div class="form-group">
         {{Form::textarea('message', '', ['class' => 'form-control', 'id' =>'pre'], 'required')}}
       </div>
       @php
           $sender = App\User::where('id', $message->sender_id)->first();
       @endphp
       {{Form::hidden('receiver_pin', $sender->pin)}}
       {{Form::hidden('receiver_id', $message->sender_id)}}
       {{Form::hidden('receiver_email', $message->sender_email)}}
       {{Form::hidden('receiver_name', $message->sender_name)}}
       {{Form::hidden('message_id', $message->id)}}
       {{Form::submit('Reply', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
      {!! Form::close() !!}
      <a href="../chat" class="btn btn-primary btn-md pull-right">Back</a><br>
    </div>
</div>
</div>

</div>

          <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
          <script>
              CKEDITOR.replace( 'pre' );
          </script> 
                      <hr>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                       <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                       <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="#">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
@endsection
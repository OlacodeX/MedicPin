@extends('layouts.main')

@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
        <div class="">
                <div class="iq-card" style="padding-bottom: 20px;">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Edit Your Answer.</span></h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                                             form tag and set it to multipart/form-data--->
                        {!! Form::open(['action' => 'QuestionsController@update_answer','method' => 'POST'])!!}
                        @include('inc.messages')
                        <div class="form-group">
                           {!!Form::textarea('answer', $answer->answer, ['class' => 'form-control', 'id' =>'pre'], 'required')!!}
                        </div>
                        {{Form::hidden('id',  $answer->id)}}
                        {{Form::submit('Update Answer', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                        {!! Form::close() !!}
                    </div>
                    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                    <script>
                       CKEDITOR.replace( 'pre' );
                    </script> 
                          </div>
                       </div>
                       @else
                       <div class="text-center" style="background: #ffffff; padding-top:30px; padding-bottom:100px; margin-bottom:30px; border-radius:50px;">
                          <img src="{{ URL::to('img/oop.jpg')}}" alt="" class="img-fluid" />
                          <h5 class="text-center">Your account has been suspended, kindly contact the administrators to restore account access.</h5>
                       
                       </div>
                       @endif   
     <!-- Wrapper END -->
      <!-- Footer -->
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
        <!-- Footer END -->
@endsection
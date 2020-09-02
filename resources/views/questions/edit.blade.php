@extends('layouts.maininnerr')

@section('content')
@include('inc.navmaininnerr')
     <!-- Page Content  -->
     <div>
        <div class="">
                <div class="iq-card" style="padding-bottom: 30px;">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Edit Your Question.</span></h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        @include('inc.messages')
                        <!---If file upload is involved always add enctype to your opening
                                             form tag and set it to multipart/form-data--->
                        {!! Form::open(['action' => ['QuestionsController@update', $question->id],'method' => 'POST'])!!}
                        @include('inc.messages')
                        <div class="form-group">
                           <label for="question">Edit Question</label>
                           {!!Form::textarea('question', $question->question, ['class' => 'form-control', 'id' =>'question'], 'required')!!}
                        </div>
                        {{Form::hidden('_method', 'PUT')}}
                        {{Form::submit('Update Question', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
                        {!! Form::close() !!}
                    </div>
                    <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                    <script>
                       CKEDITOR.replace( 'question' );
                    </script> 
                                <hr>
                          </div>
                       </div>
                    </div>
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
        <!-- Footer END -->
@endsection
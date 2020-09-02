@extends('layouts.maininner')

@section('content')
@include('inc.navmaininner')
     <!-- Page Content  -->
     <div>
        <div class="">
                <div class="iq-card">
                        {!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Have A Question?</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                                <hr>
                                <div class="">
                                    <div class="form-group">
                                       <label for="question">Your Question</label>
                                       <textarea class="form-control" id="question" name="question" placeholder="Your question here..."></textarea>
                                    </div>
                                <button type="submit" class="btn btn-primary">Ask Question</button>
                                {!! Form::close() !!}
                          </div>
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
         <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
         <script>
            CKEDITOR.replace( 'question' );
         </script> 
@endsection
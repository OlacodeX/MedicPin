@extends('layouts.maininner')

@section('content')
@include('inc.navmaininner')
@if (auth()->user()->status == 'Active')
         <div>
          <div class="">
    <div class="row">
    <div class="col-sm-12" style="text-align:justify; margin-top:30px;">
      @if (auth()->user()->name == $question->asker_name)
          
      <h5 class="title"><span>Your Question:</span></h5>
      @else
      <h5 class="title"><span>{{$question->asker_name}} Says:</span></h5>
      @endif
      <small><i class="fa fa-calendar"></i>{!!$question->created_at!!}</small>
      <hr>
      <p>{!!$question->question!!}</p>
      <hr>
                         
      <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden fadeInUp" style="padding-bottom: 0; background:transparent;" data-wow-delay="0.6s">
         @include('inc.messages')
                     
         @if (count($answers) > 0)
         <h4 class="title"><span>Answers</span></h4><br>
         <div class="iq-card-body p-0" style="padding-bottom: 0; background:transparent;">
         @foreach ($answers as $answer)
            <style>
               div.iq-card-body.p-0,
               h4.title,
               h5.title{
                  margin-left: 15px;
               }
               div.iq-card-body.p-0{
                  background:transparent;
               }
               /* enable absolute positioning */
       .inner-addon {
         position: relative;
       }
       
       /* style glyph */
       .inner-addon .fa {
         position: absolute;
         padding: 10px;
         pointer-events: none;
         color: #0178ff7b;
         font-weight: 900;
       }
       
       /* align glyph 
       .left-addon .fa  { left:  0px;}*/
       .right-addon .fa { right: 260px;}
       
       /* add padding 
       .left-addon input  { padding-left:  30px; } */
       .right-addon input { padding-right: 30px; }
                div.panel-body,
                div.panel-default{
                    border-radius: 0;
                    border-top: none;
                }
                .btn.btn-info.btn-sm{
                    background: transparent;
                    border: none;
                    color: rgb(20, 109, 224);
                }
                
                
                .btn.btn-info.btn-sm i.fa{
                    font-size: 12px;
                    margin: 0;
                }
              @media only screen and (max-width: 768px) {
       /* align glyph 
       .left-addon .fa  { left:  0px;}*/
       .right-addon .fa { right: 20px;}
       
                 
                .btn.btn-info.btn-sm{
                    background: transparent;
                    border: none;
                    color: rgb(20, 109, 224);
                    float: right;
                    display: inline;
                }
                
                .btn.btn-info.btn-sm i.fa{
                    font-size: 12px;
                    margin: 0;
                    padding: 0;
                }
                div.panel-body span.pull-left{
                    font-size: 12px;
                    margin-bottom: 0;
                }
                div.panel-body span.user-list-files.d-flex.float-right{
                   margin-top: 0;
                }
              }
            </style>
            @php
                $name = App\User::where('id', $answer->user_id)->first();
            @endphp
            <h5 class="title"><span>{{$name->name}}</span></h5>
            <small><i class="fa fa-calendar"></i>{!!$answer->created_at!!}</small>
            <p>{!!$answer->answer!!}
            @if (auth()->user()->id == $answer->user_id)
            <span class="user-list-files d-flex float-left">
            {!!Form::open(['action' => 'QuestionsController@edit_answer', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
            {{Form::hidden('id', $answer->id)}}
            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Answer"><i class="fa fa-edit"></i></button>
           
               {!!Form::close()!!}
                   {!!Form::open(['action' => 'QuestionsController@destroyy', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                  {{Form::hidden('id', $answer->id)}}
                  <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Answer"><i class="fa fa-trash-o"></i></button>
                 
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
       @if (auth()->user()->role == 'Doctor')
       <h5 class="title">Answer Question</h5>
       {!! Form::open(['action' => 'QuestionsController@store_answer', 'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
       **/ !!}
       {{Form::hidden('question_id', $question->id)}}
        <div class="form-group">
          {{Form::textarea('answer', '', ['class' => 'form-control', 'id' =>'pre'], 'required')}}
        </div>
        {{Form::submit('Answer', ['class' => 'btn btn-primary btn-md pull-left', 'style' => 'text-transform:uppercase;'])}}
       {!! Form::close() !!}
           
       @endif
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

          <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
          <script>
              CKEDITOR.replace( 'pre' );
          </script> 
                      <hr>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:80px;">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="../privacy">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="../terms">Terms of Use</a></li>
                    </ul>
                 </div>
                 <div class="col-lg-6 text-right">
                    Copyright 2020 <a href="../">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
        <!-- Footer END -->
@endsection
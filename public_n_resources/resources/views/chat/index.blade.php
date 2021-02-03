@extends('layouts.main')
@section('content')
@include('inc.navmain')
   <!-- Page Content  -->
         <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
         <div id="" class="">
            <div class="">
               <div class="row" style="padding-bottom: 100px;padding-left:20px;">
                  <div class="col-sm-12">
                     <div class="iq-card" style="padding-top: 10px;padding-bottom: 10px;">
                        <h3 class="title" style="padding-left:20px;">Your <span>Inbox</span></h3>
                    </div>
    
                    @if (
                        //if there is data in the db
                    count($messages) > 0
                    )
                
            @foreach (
                // Loop through them
                $messages as $message
                )
    
    <h4 class="title">{{$message->sender_name}}</h4>
    <a href="chat/{{$message->id}}" style="text-decoration: none;">
    <div class="panel-body">
    <p><strong>{!!Str::words($message->message,8)!!}</strong></p>
    <small><i class="fa fa-calendar"></i>{!!$message->created_at!!}</small>
    </div>
    </a>
     @endforeach
     <div class="pull-right">
             <!-----The pagination link----->
             {{$messages->links()}}
     </div>
         @else
         <p class="text-center">No message found</p>
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
      <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer">
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
         
         @endsection
@extends('layouts.main')

@section('content')
@include('inc.navmain')
         <!-- Page Content  -->
         <div>
            <div class="">
               <div class="">
               
               <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden fadeInUp" data-wow-delay="0.6s">
                 
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                       <h4 class="card-title" style="color:#02818f;">Recent Questions</h4>
                   </div>
                  </div>
                @include('inc.messages')
                 <style>
                  div.panel-body{
                     margin-left: 20px;
                     margin-bottom: 50px;
                     margin-right: 20px;
                  }
                  h4.title{
                     margin-left: 20px;
                     margin-top: 20px;
                  }
                  span.pull-left{
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
                 <div class="iq-card-body p-0">
                    @if (auth()->user()->role == 'Doctor')
                    @if (count($questions_all) > 0)
                    @foreach ($questions_all as $question_all)
                       <br><a href="questions/{{$question_all->id}}"data-toggle="tooltip" data-placement="top" title="" data-original-title="Click to read answers">
                       <div class="panel panel-default">
                       <div class="panel-body">
                          <small>{!!$question_all->created_at!!} </small><br>
                             
                           {!!$question_all->asker_name!!} <br>
                          <span class="pull-left">
                           
                             {!!Str::words( $question_all->question,6)!!} 
                          @if (auth()->user()->id == $question_all->asker_id)
                             <button class ="btn btn-info btn-sm pull-right"><a href="questions/{{$question_all->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Question"><i class="fa fa-edit"></i></a></button>
                                 {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                 {{Form::hidden('_method', 'DELETE')}}
                                <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Delete Question"><i class="fa fa-trash-o"></i></button>
                               
                                {!!Form::close()!!}
                          @endif
                          <a href="questions/{{$question_all->id}}" class="pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="fa fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                       </span>
                       </div>
                       </div>
                       </a><br>
                       @endforeach
                       <div class="pull-right">
                               <!-----The pagination link----->
                               {{$questions_all->links()}}
                       </div>
  
                       @else
                       <p class="text-center">No Questions in Forum Yet</p>    
                       @endif
                        
                    @endif
                    @if (auth()->user()->role == 'Patient')
                  @if (count($questions) > 0)
                  <h4 class="title">Questions Asked by You.</h4>
                  @foreach ($questions as $question)
                     <br><a href="questions/{{$question->id}}">
                     <div class="panel panel-default">
                     <div class="panel-body">
                        <small>{!!$question->created_at!!} </small><br>
                        <span class="pull-left">
                           
                           {!!$question->question!!} 
                        @if (auth()->user()->id == $question->asker_id)
                           <button class ="btn btn-info btn-sm pull-right"><a href="questions/{{$question->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Question"><i class="fa fa-edit"></i></a></button>
                               {!!Form::open(['action' => ['QuestionsController@destroy', $question->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                               {{Form::hidden('_method', 'DELETE')}}
                              <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Delete Question"><i class="fa fa-trash-o"></i></button>
                             
                              {!!Form::close()!!}
                        @endif
                        <a href="questions/{{$question->id}}" class="pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="fa fa-comments"></i>({{App\Answers::where('question_id', $question->id)->count()}})</a>
                     </span>
                     </div>
                     </div>
                     </a><br>
                     @endforeach

                     @else
                     <p class="text-justify" style="margin-left: 20px">You Have No Questions Yet</p>    
                     @endif
                     <br><h4 class="title">Other Questions in Forum.</h4>
                     @if (count($questions_al) > 0)
                     @foreach ($questions_al as $question_al)
                        <br><a href="questions/{{$question_al->id}}">
                        <div class="panel panel-default">
                        <div class="panel-body">
                           <small>{!!$question_al->created_at!!} </small><br>
                           <span class="pull-left">
                              
                              {!!$question_al->question!!} 
                           @if (auth()->user()->id == $question_al->asker_id)
                              <button class ="btn btn-info btn-sm pull-right"><a href="questions/{{$question_al->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Question"><i class="fa fa-edit"></i></a></button>
                                  {!!Form::open(['action' => ['QuestionsController@destroy', $question_al->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                  {{Form::hidden('_method', 'DELETE')}}
                                 <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Delete Question"><i class="fa fa-trash-o"></i></button>
                                
                                 {!!Form::close()!!}
                           @endif
                           <a href="questions/{{$question_al->id}}" class="pull-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="fa fa-comments"></i>({{App\Answers::where('question_id', $question_al->id)->count()}})</a>
                        </span>
                        </div>
                        </div>
                        </a><br>
                        @endforeach
                        <div class="pull-right">
                                <!-----The pagination link----->
                                {{$questions->links()}}
                        </div>
   
                        @else
                        <p class="text-justify" style="margin-left: 20px">No Questions in Forum Yet</p> 
                     @endif
                     @endif
                 </div>
             </div>
            </div>
         
                   
                     <!----
                              <div class="col-lg-12 chat-data p-0 chat-data-right">
                                 <div class="tab-content">
                                    <div class="tab-pane fade" id="chatbox10" role="tabpanel">
                                       <div class="chat-head">
                                          <header class="d-flex justify-content-between align-items-center bg-white pt-3 pl-3 pr-3 pb-3">
                                            <div class="d-flex align-items-center">
                                             <div id="sidebar-toggle" class="sidebar-toggle">
                                                <i class="ri-menu-3-line"></i>
                                             </div>
                                              <div class="avatar chat-user-profile m-0 mr-3">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-50 ">
                                                <span class="avatar-status"><i class="ri-checkbox-blank-circle-fill text-success"></i></span>
                                              </div>
                                              <h5 class="mb-0">Monty Carlo</h5>
                                            </div>
                                            <div id="chat-user-detail-popup" class="scroller">
                                                <div class="user-profile text-center">
                                                   <button type="submit" class="close-popup p-3"><i class="ri-close-fill"></i></button>
                                                   <div class="user mb-4">
                                                    <a class="avatar m-0">
                                                      <img src="images/user/08.jpg" alt="avatar">
                                                    </a>
                                                  <div class="user-name mt-4"><h4>Monty Carlo</h4></div>
                                                  <div class="user-desc"><p>Cape Town, RSA</p></div>
                                                  </div>
                                                  <hr>
                                                  <div class="chatuser-detail text-left mt-4">
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Nik Name:</div>
                                                         <div class="col-6 col-md-6 text-right">Babe</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Tel:</div>
                                                         <div class="col-6 col-md-6 text-right">072 143 9920</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Date Of Birth:</div>
                                                         <div class="col-6 col-md-6 text-right">July 12, 1989</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Gender:</div>
                                                         <div class="col-6 col-md-6 text-right">Female</div>
                                                      </div><hr>
                                                      <div class="row">
                                                         <div class="col-6 col-md-6 title">Language:</div>
                                                         <div class="col-6 col-md-6 text-right">Engliah</div>
                                                      </div>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="chat-header-icons d-flex">
                                              <a href="javascript:void();" class="chat-icon-phone">
                                                <i class="ri-phone-line"></i>
                                              </a>
                                             <a href="javascript:void();" class="chat-icon-video">
                                                <i class="ri-vidicon-line"></i>
                                              </a>
                                              <a href="javascript:void();" class="chat-icon-delete">
                                                <i class="ri-delete-bin-line"></i>
                                              </a>
                                              <span class="dropdown">
                                                <i class="ri-more-2-line cursor-pointer dropdown-toggle nav-hide-arrow cursor-pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></i>
                                                <span class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                  <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Pin to top</a>
                                                  <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete chat</a>
                                                  <a class="dropdown-item" href="JavaScript:void(0);"><i class="fa fa-ban" aria-hidden="true"></i> Block</a>
                                                </span>
                                              </span>
                                            </div>
                                          </header>
                                        </div>
                                       <div class="chat-content scroller">
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:45</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>How can we help? We're here for you! 😄</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat chat-left">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:48</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Hey John, I am looking for the best admin template.</p>
                                                <p>Could you please help me to find it out? 🤔</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:49</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Absolutely!</p>
                                                <p>Sofbox Dashboard is the responsive bootstrap 4 admin template.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat chat-left">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:52</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Looks clean and fresh UI.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:53</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Thanks, from ThemeForest.</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat chat-left">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/08.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:54</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>I will purchase it for sure. 👍</p>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="chat">
                                            <div class="chat-user">
                                              <a class="avatar m-0">
                                                <img src="images/user/1.jpg" alt="avatar" class="avatar-35 ">
                                              </a>
                                                <span class="chat-time mt-1">6:56</span>
                                            </div>
                                            <div class="chat-detail">
                                              <div class="chat-message">
                                                <p>Okay Thanks..</p>
                                              </div>
                                            </div>
                                          </div>
                                       </div>
                                       <div class="chat-footer p-3 bg-white">
                                          <form class="d-flex align-items-center"  action="javascript:void(0);">
                                           <div class="chat-attagement d-flex">
                                              <a href="javascript:void();"><i class="fa fa-smile-o pr-3" aria-hidden="true"></i></a>
                                              <a href="javascript:void();"><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                             </div>
                                           <input type="text" class="form-control mr-3" placeholder="Type your message">
                                           <button type="submit" class="btn btn-primary d-flex align-items-center p-2"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Send</span></button>
                                         </form>
                                       </div>
                                    </div>
                                    --------------
                                 </div>
                              </div>--->
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
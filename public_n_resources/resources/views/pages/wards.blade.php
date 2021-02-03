@extends('layouts.main')
@section('content')
@include('inc.navmain')
         <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
         <div>
            <div class="">
               <div class="row">
                @php
                    $wards = App\Wards::orderBy('status', 'asc')->get();
                @endphp
                  <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      @include('inc.messages')
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                            <h4 class="card-title">Hospital Wards</h4>
                        </div>
                        <!--
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="./questions" class="">See all questions </a>
                        </div>-->
                       </div>
                       <div class="iq-card-body">
                          <div class="iq-card-body">
                             <div class="table-responsive">
                                 @if (count($wards) > 0)
                                <table class="table mb-0 table-borderless">
                                   <thead>
                                      <tr>
                                         <th scope="col">Ward</th>
                                         <th scope="col">Total Patients In Ward</th>
                                         <th scope="col">Action</th>
                                      </tr>
                                   </thead>
                                   <tbody>
                                       @foreach ($wards as $ward)
                                      <tr>      
                                        <style>
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
                                                border: solid 1px rgb(20, 109, 224);
                                                color: rgb(20, 109, 224);
                                                margin-bottom: 13px;
                                                border-radius: 16px;
                                            }
                                            
                                            
                                            .btn.btn-info.btn-sm i.fa{
                                                font-size: 12px;
                                                margin: 0;
                                            }
                                            img.img-fluid.rounded-circle.one{
                                               width: 120px;
                                               height: 120px;
                                            }
                                          @media only screen and (max-width: 768px) {
                                   /* align glyph 
                                   .left-addon .fa  { left:  0px;}*/
                                   .right-addon .fa { right: 20px;}
                                   
                                             
                                            .btn.btn-info.btn-sm{
                                                background: transparent;
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
                                         <td>{{$ward->name}}</td>
                                         <td>{{App\Admission::where('ward', $ward->name)->count()}}</td>
                                         <td>
                                           @if ($ward->status == 'Available')
                                           {!!Form::open(['action' => 'PagesController@update_ward', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                         
                                           {{Form::hidden('id', $ward->id)}}
                                           {{Form::hidden('status', 'Full')}}
                                           <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Mark Ward As Full"><i class="fa fa-plus"></i>Mark As Full</button>
                                         
                                           {!!Form::close()!!}
                                               
                                           @else
                                           {!!Form::open(['action' => 'PagesController@update_ward', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                         
                                           {{Form::hidden('id', $ward->id)}}
                                           {{Form::hidden('status', 'Available')}}
                                           <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Mark Ward As Available For Admission"><i class="fa fa-plus"></i>Mark As Available For Admission</button>
                                         
                                           {!!Form::close()!!}
                                               
                                           @endif
                                         </td>
                                      </tr>
                                     
                                      @endforeach
                                   </tbody>
                                </table>
                                  @else
                                  <p>No Record Found</p>   
                                @endif
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
      <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top: 80px;">
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
         @endsection
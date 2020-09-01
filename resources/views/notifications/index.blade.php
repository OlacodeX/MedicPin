@extends('layouts.main')
@section('content')
@include('inc.navmain')
         <!-- Page Content  -->
         <div>
            <div class="">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-body chat-page p-0">
                           <div class="chat-data-block">
                           <div class="row" style="padding-left: 10px;">
                              <div class="col-lg-12 p-0">
                                @if (auth()->user()->role == 'Patient')
                                 @if (count($notices) > 0)

                                 <div class="scroller mt-4 pl-3">
                                    <h5 class="">Your Notifications</h5>
                                    <ul class="iq-chat-ui nav flex-column nav-pills">
                                        @foreach ($notices as $notice)
                                       <li>
                                       	<a href="notifications/{{$notice->id}}">
                                          <div class="d-flex align-items-center">
                                             <div class="chat-sidebar-name">
                                                <h6 class="mb-0">Dr. {!!Str::words( $notice->from_name,2)!!}</h6>
                                                <span>{!!Str::words( $notice->content,50)!!}</span>
                                             </div>
                                          </div>
                                      </a>
                                       </li>
                                       @endforeach
                                    </ul>
                                </div>
                                @else
                                <p class="text-center">No Notifications Yet</p>    
                                @endif
                                
                                @endif
                                @if (auth()->user()->role == 'Doctor')
                                 @if (count($notice) > 0)

                                 <div class="scroller mt-4 pl-3">
                                    <h5 class="">Your Notifications</h5>
                                    <ul class="iq-chat-ui nav flex-column nav-pills">
                                        @foreach ($notice as $notice)
                                       <li>
                                       	<a href="notifications/{{$notice->id}}">
                                          <div class="d-flex align-items-center">
                                             <div class="chat-sidebar-name">
                                                <h6 class="mb-0">{!!Str::words( $notice->to_name,2)!!}</h6>
                                                <span>{!!Str::words( $notice->content,50)!!}</span>
                                             </div>
                                          </div>
                                      </a>
                                       </li>
                                       @endforeach
                                    </ul>
                                </div>
                                @else
                                <p class="text-center">No Notifications Yet</p>    
                                @endif
                                
                                @endif
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
                        </div>
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
         @endsection
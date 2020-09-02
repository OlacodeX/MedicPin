@extends('layouts.main')

@section('content')
@include('inc.navmain')
         <!-- Page Content  -->
         <div>
            <div class="">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow fadeInUp" data-wow-delay="0.6s">
                         <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                                 <h4 class="card-title">Summary</h4>
                                 <small>Most Recent Record Dated {{$record->created_at}}</small>
                             </div>
                         </div>
                              <div class="">
                                @if (auth()->user()->role == 'Patient')
                                 <div class="iq-card-body chat-page p-0">
                                    <div class="chat-data-block">
                                    <div class="row" style="padding-left: 10px;">

                                 <div class="">
                                        <div class="iq-card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="iq-card shadow-none mb-0">
                                                        <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Blood pressure</span>
                                                           <h2>{{$record->bp}}
                                                               <img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" /> </h2>
                                                           <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                               <div class="iq-progress-bar">
                                                                   <span class="bg-primary" data-percent={{$record->bp}}></span>
                                                               </div>
                                                           </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="iq-card shadow-none mb-0">
                                                        <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Temperature</span>
                                                            <h2>{{$record->temp}}Celsius 
                                                            <img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                                            <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                <div class="iq-progress-bar">
                                                                    <span class="bg-success" data-percent={{$record->temp}}></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="iq-card shadow-none mb-0">
                                                        <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Heart Rate</span>
                                                            <h2>{{$record->h_rate}}%
                                                            <img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                                            <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                <div class="iq-progress-bar">
                                                                    <span class="bg-danger" data-percent={{$record->h_rate}}></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                      <div class="">
                                      <div class="row">
                                          <div class="col-md-3">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                        <span class="font-size-14">Genotype</span>
                                                        <h6>
                                                            {{$record->genotype}}
                                                        </h6>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                        <span class="font-size-14">Blood Group</span>
                                                        <h6>
                                                            {{$record->b_group}}
                                                        </h6>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                     <div class="">
                                                        <span class="font-size-14">Weight</span>
                                                        <h6>
                                                            {{$record->weight}}kg
                                                        </h6>
        
                                                     </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                     <div class="">
                                                        <span class="font-size-14">Height</span>
                                                        <h6>
                                                            {{$record->height}}
                                                        </h6>
        
                                                     </div>
                                                  </div>
                                              </div>
                                           </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Oxygen Saturation</span>
                                                            <h6>
                                                                {{$record->oxygen}}%
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Glucose level</span>
                                                            <h6>
                                                                {{$record->glucose}}%
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Respiratory rate</span>
                                                            <h6>
                                                                {{$record->r_rate}}%
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">BMI</span>
                                                            <h6>
                                                                {{$record->BMI}}
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-12">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">General Note</span>
                                                            <h6>
                                                                {{$record->note}}
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div><br>
                                      <a href="#records" data-toggle="collapse" class="btn btn-primary">See Past Records</a>
                                      <div class="col-md-12 collapse" id="records">
                                          <div class="iq-card shadow-none mb-0">
                                              <div class="iq-card-body p-1">
                                                 <div class="">
                                                  @if (count($records) > 0)
                                                  <div class="col-sm-12 col-md-6">
                                                     <div class="user-list-files d-flex">
                                                         <a href="javascript:void();" class="chat-icon-delete">
                                                           Pdf
                                                         </a>
                                                       </div>
                                                  </div>
                                               </div>
                                               <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                                 <thead>
                                                     
                                                     <tr>
                                                        <th>Date</th>
                                                        <th>Temperature</th>
                                                        <th>BP</th>
                                                        <th>Heart Rate</th>
                                                        <th>Genotype</th>
                                                        <th>Blood Group</th>
                                                        <th>Weight</th>
                                                        <th>Height</th>
                                                        <th>Oxygen Saturation</th>
                                                        <th>Glucose Level</th>
                                                        <th>Respiratory Rate</th>
                                                        <th>BMI</th>
                                                        <th>Note</th>
                                                     </tr>
                                                 </thead>
                                                 <tbody>
                                                  @foreach ($records as $record)
                                                     <tr>
                                                        <td class="text-center">{{$record->created_at}}</td>
                                                        <td>{{$record->temp}}</td>
                                                        <td>{{$record->bp}}</td>
                                                        <td>{{$record->h_rate}}</td>
                                                        <td>{{$record->genotype}}</td>
                                                        <td>{{$record->b_group}}</td>
                                                        <td>{{$record->weight}}</td>
                                                        <td>{{$record->height}}</td>
                                                        <td>{{$record->oxygen}}</td>
                                                        <td>{{$record->glucose}}</td>
                                                        <td>{{$record->r_rate}}</td>
                                                        <td>{{$record->BMI}}</td>
                                                        <td>{{$record->note}}</td>
                                                     </tr> 
                                                     @endforeach                      
                                                 </tbody>
                                               </table>
                                            </div>
                                                  <div class="col-md-6">
                                                      <div style="text-align:right;">
                                                              <!-----The pagination link----->
                                                              {{$records->links()}}
                                                      </div>
                                                      @else
                                                      <p>No Record Found</p>    
                                                      @endif
                                                 </div>
                                              </div>
                                          </div>
                                      </div>
                                      </div>
                                   <hr>
                                </div>
                                @endif
                                @if (auth()->user()->role == 'Doctor')
                                 <div class="mt-4 pl-3">
                                       <style>
                                          div.col-sm-2 .iq-card.shadow-none.mb-0,
                                          .iq-card-body.p-1{
                                             box-shadow: 0 5px 6px 0 rgba(105, 105, 105, 0.2);

                                          }
                                          li.top{
                                             margin-top: 20px;
                                          }
                                          ul.top{
                                             padding-left: 0;
                                             margin-left: 0;
                                          }
                                          .iq-card.shadow-none.mb-0 .iq-card-body span,
                                          .iq-card.shadow-none.mb-0 .iq-card-body h6,
                                          .iq-card.shadow-none.mb-0 .iq-card-body h2{
                                             padding-left: 20px;
                                          }
                                          a.btn.btn-primary{
                                             margin-left: 10px;
                                          }
                                       @media only screen and (max-width: 768px) {
                                          div.col-md-3{
                                             width: 50%;
                                             float: left;
                                             margin-bottom: 30px;
                                          }
                                          div.col-md-3 .iq-card.shadow-none.mb-0{
                                             width: 150px;
                                             margin-left: 10px;
                                          }
                                          div.col-md-3 .iq-card.shadow-none.mb-0 .iq-card-body span,
                                          div.col-md-3 .iq-card.shadow-none.mb-0 .iq-card-body h6{
                                             padding-left: 20px;
                                          }
                                            
                                            
                                          }
                                       </style>
                                            <div class="iq-card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                               <span class="font-size-14">Blood pressure</span>
                                                               <h2>{{$record->bp}}
                                                                   <img class="float-right summary-image-top mt-1" src="images/page-img/04.png" alt="summary-image" /> </h2>
                                                               <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                   <div class="iq-progress-bar">
                                                                       <span class="bg-primary" data-percent={{$record->bp}}></span>
                                                                   </div>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                                <span class="font-size-14">Temperature</span>
                                                                <h2>{{$record->temp}}C
                                                                <img class="float-right summary-image-top mt-1" src="images/page-img/06.png" alt="summary-image" /> </h2>
                                                                <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                    <div class="iq-progress-bar">
                                                                        <span class="bg-success" data-percent={{$record->temp}}></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="iq-card shadow-none mb-0">
                                                            <div class="iq-card-body p-1">
                                                                <span class="font-size-14">Heart Rate</span>
                                                                <h2>{{$record->h_rate}}%
                                                                <img class="float-right summary-image-top mt-1" src="images/page-img/05.png" alt="summary-image" /> </h2>
                                                                <div class="iq-progress-bar-linear d-inline-block w-100 mt-3">
                                                                    <div class="iq-progress-bar">
                                                                        <span class="bg-danger" data-percent={{$record->h_rate}}></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                          <div class="">
                                          <div class="row">
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Genotype</span>
                                                            <h6>
                                                                {{$record->genotype}}
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                            <span class="font-size-14">Blood Group</span>
                                                            <h6>
                                                                {{$record->b_group}}
                                                            </h6>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                         <div class="">
                                                            <span class="font-size-14">Weight</span>
                                                            <h6>
                                                                {{$record->weight}}kg
                                                            </h6>
            
                                                         </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="iq-card shadow-none mb-0">
                                                      <div class="iq-card-body p-1">
                                                         <div class="">
                                                            <span class="font-size-14">Height</span>
                                                            <h6>
                                                                {{$record->height}}cm
                                                            </h6>
            
                                                         </div>
                                                      </div>
                                                  </div>
                                              </div>
                           
                                              <div class="col-md-3">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Oxygen Saturation</span>
                                                           <h6>
                                                               {{$record->oxygen}}%
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Glucose level</span>
                                                           <h6>
                                                               {{$record->glucose}}%
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Respiratory rate</span>
                                                           <h6>
                                                               {{$record->r_rate}}%
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-3">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">BMI</span>
                                                           <h6>
                                                               {{$record->BMI}}
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6 text-center">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">General Note</span>
                                                           <h6>
                                                               {{$record->note}}
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-6 text-center">
                                                 <div class="iq-card shadow-none mb-0">
                                                     <div class="iq-card-body p-1">
                                                           <span class="font-size-14">Prescription</span>
                                                           <h6>
                                                               {{$record->prescription}}
                                                           </h6>
                                                     </div>
                                                 </div>
                                             </div>
                   
                                          </div><br>
                                          <a href="#records" data-toggle="collapse" class="btn btn-primary">See Past Records</a>
                                          <div class="col-md-12 collapse" id="records">
                                              <div class="iq-card shadow-none mb-0">
                                                  <div class="iq-card-body p-1">
                                                     <div class="">
                                                      @if (count($records) > 0)
                                                      <div class="col-sm-12 col-md-6">
                                                         <div class="user-list-files d-flex">
                                                             <a href="javascript:void();" class="chat-icon-delete">
                                                               Pdf
                                                             </a>
                                                           </div>
                                                      </div>
                                                   </div>
                                                   <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                                                     <thead>
                                                         
                                                     <tr>
                                                      <th>Date</th>
                                                      <th>Temperature</th>
                                                      <th>BP</th>
                                                      <th>Heart Rate</th>
                                                      <th>Genotype</th>
                                                      <th>Blood Group</th>
                                                      <th>Weight</th>
                                                      <th>Height</th>
                                                      <th>Oxygen Saturation</th>
                                                      <th>Glucose Level</th>
                                                      <th>Respiratory Rate</th>
                                                      <th>BMI</th>
                                                      <th>Note</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                @foreach ($records as $record)
                                                   <tr>
                                                      <td class="text-center">{{$record->created_at}}</td>
                                                      <td>{{$record->temp}}</td>
                                                      <td>{{$record->bp}}</td>
                                                      <td>{{$record->h_rate}}</td>
                                                      <td>{{$record->genotype}}</td>
                                                      <td>{{$record->b_group}}</td>
                                                      <td>{{$record->weight}}</td>
                                                      <td>{{$record->height}}</td>
                                                      <td>{{$record->oxygen}}</td>
                                                      <td>{{$record->glucose}}</td>
                                                      <td>{{$record->r_rate}}</td>
                                                      <td>{{$record->BMI}}</td>
                                                      <td>{{$record->note}}</td>
                                                   </tr> 
                                                         @endforeach                      
                                                     </tbody>
                                                   </table>
                                                </div>
                                                      <div class="col-md-6">
                                                          <div style="text-align:right;">
                                                                  <!-----The pagination link----->
                                                                  {{$records->links()}}
                                                          </div>
                                                          @else
                                                          <p>No Record Found</p>    
                                                          @endif
                                                     </div>
                                                  </div>
                                              </div>
                                          </div>
                                          </div>
                                       <hr>
                                </div>   
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

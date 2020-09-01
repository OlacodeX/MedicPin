@extends('layouts.maininner')
@section('content')
@include('inc.navmaininner')
         <!-- Page Content  -->
         <div>
            <div class="">
               <div class="row">
                  <div class="col-lg-12">
                      <div class="container">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height wow fadeInUp" data-wow-delay="0.6s">
                            <div class="iq-card-header d-flex justify-content-between">
                            @if (auth()->user()->role == 'Patient')
                            <div class="iq-header-title">
                                <h4 class="card-title">Dr. {!!Str::words( $notice->from_name,2)!!}</h4>
                                <span>{!!Str::words( $notice->created_at,5)!!}</span>
                            </div>
                                
                            @endif
                            @if (auth()->user()->role == 'Doctor')
                            <div class="iq-header-title">
                                <h4 class="card-title">{!!Str::words( $notice->to_name,2)!!}</h4>
                                <span>{!!Str::words( $notice->created_at,5)!!}</span>
                            </div>
                                
                            @endif
                            </div>
                            <div class="iq-card-body">
                                 <span>{!!Str::words( $notice->content,50)!!}</span>
                            </div>
                        </div>
                        
                      </div>
                  </div>
               </div>
            </div>
      <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:300px;">
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
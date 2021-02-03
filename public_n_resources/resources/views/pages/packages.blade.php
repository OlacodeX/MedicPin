@extends('layouts.main')
@section('content')
@include('inc.navmain')
     <!-- Page Content  -->
@if (auth()->user()->status == 'Active')
     <div>
        <div class="">
                    <div class="iq-card">
                     @include('inc.messages')
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                           <h4 class="card-title">Packages Available Under The {{$cat->name}} Category</h4>

                          </div>
                       </div>
                       <style>
                          img.card-img-top{
                             height: 200px;
                          }
                                          img.img-fluid.tp{
                                             height: 200px;
                                             width: 400px;
                                          }
                                          .card.iq-mb-3{
                                               padding: 8px;
                                               box-shadow: 2px 5px 3px 5px rgba(236, 236, 236, 0.2);

                                            } 
                                       </style>
                       <div class="iq-card-body">
                            <div class="col-md-12">
                               <div class="row">
                                 @if (count($packages) > 0)
                                 @foreach ($packages as $package)
                                 <div class="col-md-4">
                                    <div class="card iq-mb-3">
                                       <img src="{{ URL::to('img/hmo/packages/'.$package->img)}}" class="card-img-top" alt="#">
                                       <div class="card-body">
                                          <h4 class="card-title">{{$package->name}}</h4>
                                          <p class="card-text">
                                             {!!$package->description!!}
                                          </p>
                                       </div>
                                       <div class="card-body">
                                          <span class="user-list-files d-flex float-left">
                                             {!!$package->type!!} @ {!!$package->price!!}
                                          </span>
                                          <span class="user-list-files d-flex float-right">
                                          {!!Form::open(['action' => 'HmoController@edit_package', 'method' => 'POST','style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('id', $package->id)}}
                                          <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit package."><i class="fa fa-edit"></i></button>
                                          
                                          {!!Form::close()!!}
                                       
                                             {!!Form::open(['action' => 'HmoController@destroy_package', 'method' => 'POST','style' => 'margin-right:20px;'])!!}
                                             {{Form::hidden('id', $package->id)}}
                                             <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete package"><i class="fa fa-trash-o"></i></button>
                                             
                                             {!!Form::close()!!}
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
                                 @else
                                 <p>No record found</p>
                                 @endif
                               </div>
                            </div>
                         </div>
                         <hr>
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
        <footer class="bg-white iq-footer" style="margin-top:80px;">
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
           <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
           <script>
           CKEDITOR.replace( 'value' );
           </script> 
          
        </footer>
        <!-- Footer END -->
@endsection
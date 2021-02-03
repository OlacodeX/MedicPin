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
                             <h4 class="card-title">Add Staff To HMO Package</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                      <div class="row">
                        <div class="form-group col-md-6">
                           <label for="email">Staff Email</label>
                           <div class="inner-addon right-addon">
                               <i class="fa fa-envelope"></i>
                           <input type="text" class="form-control" value="{{$email}}" name="email" id="email" placeholder="Email">
                           </div>
                        </div>
                        @php
                            $hmo = App\User::where('id', $hmo)->first();
                            $hmo_cat = App\hmo_cat::where('id', $category)->first();
                        @endphp
                            <div class="form-group col-md-6">
                              <label for="hmo">Selected HMO Name</label>
                              <select class="form-control" id="selecthmo" name="hmo">
                              <option value="{{$hmo->id}}">{{$hmo->hmo_org_name}}</option>
                              </select>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="hmo">Selected HMO Product Category</label>
                              <select class="form-control" id="selecthmo_cat" name="category">
                              <option value="{{$hmo_cat->id}}">{{$hmo_cat->name}}</option>
                              </select>
                            </div>
                            <div class="col-md-12">
                              <h4 class="card-title">Packages Available Under The {{$hmo_cat->name}} Category</h4>

 
                              <style>
                                 img.card-img-top{
                                    height: 230px;
                                    width: 350px;
                                 }
                                                 .card.iq-mb-3{
                                                      padding: 8px;
                                                      box-shadow: 2px 5px 3px 5px rgba(236, 236, 236, 0.2);
       
                                                   } 
                                              </style>
                               <div class="row">
                                 @if (count($packages) > 0)
                                 @foreach ($packages as $package)
                                 <div class="col-md-4">
              
                                    {!! Form::open(['action' => 'HmoController@store_add', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                                    **/ !!}
                                           <input type="hidden" name="package" value="{{$package->id}}"> 
                                           <input type="hidden" name="hmo" value="{{$hmo->id}}">
                                           <input type="hidden" name="email" value="{{$email}}">     
                                           <input type="hidden" name="category" value="{{$hmo_cat->id}}">         
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
                                          </span><br>
                                          <button type="submit" class="btn btn-primary">Select Package</button>
                                          
                                       </div>
                                    </div>
                                    {!! Form::close() !!}
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
           <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
           <script>
           CKEDITOR.replace( 'value' );
           </script> 
        <!-- Footer END -->
@endsection
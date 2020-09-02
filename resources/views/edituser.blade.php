@extends('layouts.maininnerr')

@section('content')
@include('inc.navmaininnerr')
     <!-- Page Content  -->
     <div>
        <div class="">
           <div class="">
                       <div class="iq-card-body">
                        {!! Form::open(['action' => ['PagesController@update', $user->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) /** The action should be the block of code in the store function in PostsController
                        **/ !!}
                         @csrf
              <div class="col-lg-12">
                    <div class="iq-card">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title" style="color: #02818f;">Update User Information</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="new-user-info">
                                <div class="row">
                                   <div class="form-group col-md-6">
                                      <label for="name">Name:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-user"></i>
                                      <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" placeholder="First Name">
                                      </div>
                                    </div>
                                   <div class="form-group col-md-6">
                                      <label for="email">Email:</label>
                                      <div class="inner-addon right-addon">
                                          <i class="fa fa-envelope"></i>
                                      <input type="email" class="form-control" id="email" placeholder="Email" value="{{$user->email}}" name="email">
                                      </div>
                                    </div>
                                </div>
                                <hr>
                          </div>
                          {{Form::hidden('id', $user->id)}}
                                <button type="submit" class="btn btn-primary">Update</button>
                                {!! Form::close() !!}
                          </div>
                       </div>
                    </div>
              </div>
           </div>
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:120px;">
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
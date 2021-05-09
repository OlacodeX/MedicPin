@extends('layouts.main')

@section('content')
@include('inc.navmain')
@if (auth()->user()->status == 'Active')
<!-- Breadcrumb -->
<div class="breadcrumb-bar">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-md-12 col-12">
            <nav aria-label="breadcrumb" class="page-breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="./dashboard">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Appointments</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">My Appointments</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card card-table">
      <div class="card-header">
         <h4 class="card-title"><b>Your Staff List</b></h4>
         
      </div>
      <div class="card-body">
         @if (count($users) > 0)
               <div class="table-responsive">
                  <table class="table table-hover table-center mb-0">
                     <thead>
                        <tr>
                             <th>Staff Name</th>
                             <th>Email</th>
                             <th>HMO</th>
                             <th>HMO Package On</th>
                             <th>HMO Package Value</th>
                             <th>Address</th>
                             <th>Action</th>         
                             <th></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($users as $user)
                        <tr>
                           <td>{{$user->name}}</td>
                           <td>{{$user->email}}</td>
                           @php
                               $hmo_user = App\hmo_p::where('user_name',$user->email)->first();
                           @endphp
                           @if (!empty($hmo_user))
                           @php
                               $hmo_details = App\User::where('id', $hmo_user->hmo)->first();
                               $package_name = App\HMO::where('id',$hmo_user->package_on )->first();
                           @endphp
                               <td>{{$hmo_details->hmo_org_name}}</td>
                               <td>{{$package_name->name}}</td>
                               <td>{!!$package_name->description!!}</td>
                           @else
                           <td>N/A</td>
                           <td>N/A</td>
                           <td>N/A</td>
                               
                           @endif
                           <td>{{$user->address}}</td>
                           <td class="text-right">
                              <div class="table-action">
                                 @php
                                     $packagee = App\hmo_p::where('user_name',$user->email)->first();
                                    
                                 @endphp
     
                                 @if ($packagee->expires_after < Carbon\Carbon::now() && $packagee->expires_after != '')
                                 <a>
                                    {!!Form::open(['action' => 'HmoController@add', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('email', $user->email)}}
                                 <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Renew HMO Package"><i class="fa fa-plus mr-2"></i>Renew HMO package</button>
                                 {!!Form::close()!!} 
                              </a>
                                 @endif
                              <a>
                                 {!!Form::open(['action' => 'HmoController@add', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                 {{Form::hidden('email', $user->email)}}
                                 @php
                                     $package = App\User::where('email',$user->email)->first();
                                 @endphp
                                 @if ($package->hmo_package != '' && $packagee->expires_after > Carbon\Carbon::now())
                                 <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Upgrade/Downgrade HMO Package"><i class="fa fa-plus mr-2"></i>Upgrade/Downgrade HMO package</button>
                                 @endif
                                 
                                 @if ($package->hmo_package == '')
                                 <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add Staff To HMO Package"><i class="fa fa-plus mr-2"></i>Add to HMO package</button>
                                   @endif
                                 {!!Form::close()!!}
                              </a> 
                              </div>
                           </td>
                           <td>
                              
                              {!!Form::open(['action' => ['HmoController@destroy', $user->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                              {{Form::hidden('_method', 'DELETE')}}
                             <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Remove Staff From Organization"><i class="fa fa-trash-o mr-2"></i>Remove Staff From Organization</button>
                            
                             {!!Form::close()!!}
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
               <div class="col-md-6">
                   <div style="text-align:right;">
                           <!-----The pagination link----->
                           {{$users->links()}}
                   </div>
               </div>
                   @else
                   <p>No Record Found</p>   
                 @endif
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

<!-- Footer 
<footer class="bg-white iq-footer">
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
Footer END -->
@endsection
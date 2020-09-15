@extends('layouts.main')

@section('content')
@include('inc.navmain')
    <div>
    <div class="">
    <div class="row">
    <div class="col-sm-12" style="text-align:justify; margin-top:30px;">
      @include('inc.messages')
      
      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between">
           <div class="iq-header-title">
              <h4 class="card-title">Your Staff List </h4>
           </div>
           <div class="iq-card-header-toolbar d-flex align-items-center">
             <div class="dropdown">
                <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                <i class="ri-more-fill"></i>
                </span>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                   <a class="dropdown-item" href="./add_staff"><i class="las la-radiation"></i>Add New Staff</a>
                </div>
             </div>
           </div>
        </div>
        <div class="iq-card-body">
           <div class="table-responsive">
            @if (count($users) > 0)
           <table class="table mb-0 table-borderless">
              <thead>
                 <tr>
                  <th scope="col">Staff Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">HMO</th>
                    <th scope="col">HMO Package On</th>
                    <th scope="col">HMO Package Value</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>

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
                    <td>
                      <div class="dropdown">
                         <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                         <i class="ri-more-fill"></i>
                         </span>
                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                         <a class="dropdown-item">
                            {!!Form::open(['action' => 'HmoController@add', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                            {{Form::hidden('email', $user->email)}}
                            @php
                                $package = App\User::where('email',$user->email)->first();
                            @endphp
                            @if ($package->hmo_package == '')
                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add Staff To HMO Package"><i class="fa fa-plus mr-2"></i>Add to HMO package</button>
                               
                            @else
                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Upgrade/Downgrade HMO Package"><i class="fa fa-plus mr-2"></i>Upgrade/Downgrade HMO package</button>
                             @endif
                            {!!Form::close()!!}
                         </a>
                         <a class="dropdown-item">
                         {!!Form::open(['action' => ['HmoController@destroy', $user->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                         {{Form::hidden('_method', 'DELETE')}}
                        <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Remove Staff From Organization"><i class="fa fa-trash-o mr-2"></i>Remove Staff From Organization</button>
                       
                        {!!Form::close()!!}
                         </a>
                         </div>
                      </div>
                        
                    </td>
                 </tr>
                
                 @endforeach
              </tbody>
           </table>
               
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

          <script src="{{ URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
          <script>
              CKEDITOR.replace( 'pre' );
          </script> 
     <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top:280px;">
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
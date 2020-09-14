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
              <h4 class="card-title">Your List </h4>
           </div>
           <div class="iq-card-header-toolbar d-flex align-items-center">
             <div class="dropdown">
                <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                <i class="ri-more-fill"></i>
                </span>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                   <a class="dropdown-item" href="./add_staff"><i class="las la-radiation"></i>Add New</a>
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
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>

                 </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user)
                 <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
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
                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add Staff To HMO Package"><i class="fa fa-plus mr-2"></i>Delete</button>
                           
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
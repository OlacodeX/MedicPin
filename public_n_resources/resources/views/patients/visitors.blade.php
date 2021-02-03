@extends('layouts.main')

@section('content')
@include('inc.navmain')
@if (auth()->user()->status == 'Active')
    <div>
    <div class="">
    <div class="row">
    <div class="col-sm-12" style="text-align:justify; margin-top:30px;">
      
      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between">
           @if (auth()->user()->role == 'Patient')
           <div class="iq-header-title">
              <h4 class="card-title">Your Visitors </h4>
           </div>
               
           @endif
           @if (auth()->user()->role == 'Nurse')
           <div class="iq-header-title">
              <h4 class="card-title">Visitors For This Patient</h4>
           </div>
               
           @endif
           <div class="iq-card-header-toolbar d-flex align-items-center">
            @if (auth()->user()->role == 'Patient')
            <div class="dropdown">
               <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
               <i class="ri-more-fill"></i>
               </span>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                  <a class="dropdown-item" href="./visitors/create"><i class="las la-radiation"></i>Add New</a>
               </div>
            </div>
                
            @endif
           </div>
        </div>
        <div class="iq-card-body">
           <div class="table-responsive">
              @if (auth()->user()->role == 'Patient')
              @if (count($visitors) > 0)
             <table class="table mb-0 table-borderless">
                <thead>
                   <tr>
                      <th scope="col">Visitor</th>
                      <th scope="col">Visit Date</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Contact</th>
                      <th scope="col">Action</th>

                   </tr>
                </thead>
                <tbody>
                    @foreach ($visitors as $visitor)
                   <tr>
                      <td>{{$visitor->name}}</td>
                      <td>{{$visitor->date}}</td>
                      <td>{{$visitor->gender}}</td>
                      <td><a href="tel:{{$visitor->number}}" style="text-decoration: none;">{{$visitor->number}}</a></td>
                      <td>
                        <div class="dropdown">
                           <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                           <i class="ri-more-fill"></i>
                           </span>
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                           <a class="dropdown-item" href="visitors/{{$visitor->id}}/edit">
                             <button class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment"><i class="ri-pencil-fill mr-2"></i>Edit</button>
                           </a>
                           
                           <a class="dropdown-item">
                              {!!Form::open(['action' => ['VisitorController@destroy', $visitor->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                              {{Form::hidden('id', $visitor->id)}}
                              {{Form::hidden('_method', 'DELETE')}}
                              <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Appointment"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                             
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
                       {{$visitors->links()}}
               </div>
           </div>
               @else
               <p>No Record Found</p>   
             @endif
            @else
            @if (count($p_visitors) > 0)
           <table class="table mb-0 table-borderless">
              <thead>
                 <tr>
                    <th scope="col">Visitor</th>
                    <th scope="col">Visit Date</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Contact</th>
                    <!--
                    <th scope="col">Action</th>-->

                 </tr>
              </thead>
              <tbody>
                  @foreach ($p_visitors as $visitor)
                 <tr>
                    <td>{{$visitor->name}}</td>
                    <td>{{$visitor->date}}</td>
                    <td>{{$visitor->gender}}</td>
                    <td><a href="tel:{{$visitor->number}}" style="text-decoration: none;">{{$visitor->number}}</a></td>
                    <!---
                    <td>
                      <div class="dropdown">
                         <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                         <i class="ri-more-fill"></i>
                         </span>
                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                         <a class="dropdown-item" href="visitors/{{$visitor->id}}/edit">
                           <button class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment"><i class="ri-pencil-fill mr-2"></i>Edit</button>
                         </a>
                         
                         <a class="dropdown-item">
                            {!!Form::open(['action' => ['VisitorController@destroy', $visitor->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                            {{Form::hidden('id', $visitor->id)}}
                            {{Form::hidden('_method', 'DELETE')}}
                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Appointment"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</button>
                           
                            {!!Form::close()!!}
                         </a>
                         </div>
                      </div>
                        
                    </td>--->
                 </tr>
                
                 @endforeach
              </tbody>
           </table>
               
         <div class="col-md-6">
             <div style="text-align:right;">
                     <!-----The pagination link----->
                     {{$p_visitors->links()}}
             </div>
         </div>
             @else
             <p>No Record Found</p>   
           @endif

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
        <!-- Footer END -->
@endsection
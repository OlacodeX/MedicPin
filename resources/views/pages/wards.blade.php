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
                  <li class="breadcrumb-item active" aria-current="page">Hospital Wards</li>
               </ol>
            </nav>
            <h2 class="breadcrumb-title">Hospital Wards</h2>
         </div>
      </div>
   </div>
</div>
<!-- /Breadcrumb -->
@include('inc.sidebar')
						
<div class="col-md-7 col-lg-8 col-xl-9">
   <div class="card">
      <div class="card-header">
         <h4 class="card-title"><b>Hospital Wards</b></h4> 
      </div>
      @php
          $wards = App\Wards::orderBy('status', 'asc')->get();
      @endphp
      <div class="card-body">
        @if (count($wards) > 0)
         <div class="table-responsive">
            <table class="table table-hover table-center mb-0">
               <thead>
                  <tr>
                    <tr>
                       <th>Ward</th>
                       <th>Total Patients In Ward</th>
                       <th>Action</th>
                       <th></th>
                    </tr>
                  </tr>
               </thead>
               <tbody> 
                @foreach ($wards as $ward)
               <tr>      
                 <style>
                    /* enable absolute positioning */
            .inner-addon {
              position: relative;
            }
            
            /* style glyph */
            .inner-addon .fa {
              position: absolute;
              padding: 10px;
              pointer-events: none;
              color: #0178ff7b;
              font-weight: 900;
            }
            
            /* align glyph 
            .left-addon .fa  { left:  0px;}*/
            .right-addon .fa { right: 260px;}
            
            /* add padding 
            .left-addon input  { padding-left:  30px; } */
            .right-addon input { padding-right: 30px; }
                     div.panel-body,
                     div.panel-default{
                         border-radius: 0;
                         border-top: none;
                     }
                     .btn.btn-info.btn-sm{
                         background: transparent;
                         border: solid 1px rgb(20, 109, 224);
                         color: rgb(20, 109, 224);
                         margin-bottom: 13px;
                         border-radius: 16px;
                     }
                     
                     
                     .btn.btn-info.btn-sm i.fa{
                         font-size: 12px;
                         margin: 0;
                     }
                     img.img-fluid.rounded-circle.one{
                        width: 120px;
                        height: 120px;
                     }
                   @media only screen and (max-width: 768px) {
            /* align glyph 
            .left-addon .fa  { left:  0px;}*/
            .right-addon .fa { right: 20px;}
            
                      
                     .btn.btn-info.btn-sm{
                         background: transparent;
                         color: rgb(20, 109, 224);
                         float: right;
                         display: inline;
                     }
                     
                     .btn.btn-info.btn-sm i.fa{
                         font-size: 12px;
                         margin: 0;
                         padding: 0;
                     }
                     div.panel-body span.pull-left{
                         font-size: 12px;
                         margin-bottom: 0;
                     }
                     div.panel-body span.user-list-files.d-flex.float-right{
                        margin-top: 0;
                     }
                   }
                 </style>
                  <td>{{$ward->name}}</td>
                  <td>{{App\Admission::where('ward', $ward->name)->count()}}</td>
                  <td>
                    @if ($ward->status == 'Available')
                    {!!Form::open(['action' => 'PagesController@update_ward', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                  
                    {{Form::hidden('id', $ward->id)}}
                    {{Form::hidden('status', 'Full')}}
                    <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Mark Ward As Full"><i class="fa fa-plus"></i> Mark As Full</button>
                  
                    {!!Form::close()!!}
                        
                    @else
                    {!!Form::open(['action' => 'PagesController@update_ward', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                  
                    {{Form::hidden('id', $ward->id)}}
                    {{Form::hidden('status', 'Available')}}
                    <button type="submit" class ="btn btn-rounded btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Mark Ward As Available For Admission"><i class="fa fa-plus"></i> Mark As Available For Admission</button>
                  
                    {!!Form::close()!!}
                        
                    @endif
                  </td>
                  </tr> 
                  @endforeach
               </tbody>
            </table>
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
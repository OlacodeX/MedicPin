@extends('layouts.main')
@section('page_title')
{{config('app.name')}} | Dashboard
@endsection
@section('content')
@include('inc.navmain')
@if (auth()->user()->role == 'Organization')
    
         <!-- TOP Nav Bar END -->
         <div class="">
            <div class="row">
               <div class="col-lg-12">
                  <div class="row">
                     <div class="col-md-6 col-lg-12">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-primary rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-fill"></i></div>
                                 <div class="text-right">                                 
                                 <h2 class="mb-0"><span class="counter">{{App\User::where('org',auth()->user()->id)->count()}}</span></h2>
                                    <h5 class="">Staff Members</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!---
                     <div class="col-md-6 col-lg-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-warning rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-home-8-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">{{App\hospitals::where('hmo',auth()->user()->id)->count()}}</span></h2>
                                    <h5 class="">Registered Hospital(s)</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-warning rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-women-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">{{App\HMO::where('hmo',auth()->user()->id)->count()}}</span></h2>
                                    <h5 class="">Package(s)</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>---->
                     <!----
                     <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-danger rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-group-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">3500</span></h2>
                                    <h5 class="">Patients</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-info rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-info"><i class="ri-hospital-line"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">4500</span></h2>
                                    <h5 class="">Pharmacists</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>---->
                  </div>
               </div>
               <div class="col-sm-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body pb-0 mt-3">       
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
                             border: solid 1px rgb(20, 109, 224);
                             color: rgb(20, 109, 224);
                             margin-bottom: 13px;
                             border-radius: 16px;
                              color: rgb(20, 109, 224);
                          }
                          
                          
                          .btn.btn-info.btn-sm i.fa{
                              font-size: 12px;
                              margin: 0;
                          }
                        @media only screen and (max-width: 768px) {
                 /* align glyph 
                 .left-addon .fa  { left:  0px;}*/
                 .right-addon .fa { right: 20px;}
                 
                           
                          .btn.btn-info.btn-sm{
                             border: solid 1px rgb(20, 109, 224);
                             color: rgb(20, 109, 224);
                             margin-bottom: 13px;
                             border-radius: 16px;
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
                          <span class="pull-left">{{auth()->user()->hmo_org_name}}</span>
                          <span class="user-list-files d-flex float-right">
 
                             {!!Form::open(['action' => 'HmoController@create_staff', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                            
                             <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add Staff"><i class="fa fa-plus"></i>Add Staff</button>
                            
                             {!!Form::close()!!}
 
                             {!!Form::open(['action' => 'HmoController@staff_list', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                            
                            
                             <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Staff List"><i class="fa fa-user-secret"></i>Staff List</button>
                            
                             {!!Form::close()!!}
                           </span>
                     </div>   
                  </div>
               </div>
                  <div class="col-sm-12" style="text-align:justify; margin-bottom:80px;">
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
                      @php
                          $users = App\ORG::orderBy('created_at', 'desc')->where('org_id', auth()->user()->id)->paginate(5);
                      @endphp
                      <div class="iq-card-body">
                         <div class="table-responsive">
                          @if (count($users) > 0)
                         <table class="table mb-0 table-borderless">
                            <thead>
                               <tr>
                                <th scope="col">Staff Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">HMO</th>
                                  <th scope="col">HMO Category</th>
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
                                      $cat = App\hmo_cat::where('id',$package_name->cat_id)->first();
                                  @endphp
                                      <td>{{$hmo_details->hmo_org_name}}</td>
                                      @if (!empty($cat))
                                      <td>{{$cat->name}}</td>
                                      @else
                                      <td>N/A</td>
                                      @endif
                                      <td>{{$package_name->name}}</td>
                                      <td>{{$package_name->description}}</td>
                                  @else
                                  <td>N/A</td>
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
@endif
@if (auth()->user()->role == 'HMO')
    
         <!-- TOP Nav Bar END -->
         <div class="">
            <div class="row">
               <div class="col-lg-12">
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-primary rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-fill"></i></div>
                                 <div class="text-right">                                 
                                 <h2 class="mb-0"><span class="counter">{{App\User::where('hmo',auth()->user()->id)->count()}}</span></h2>
                                    <h5 class="">Registered Users</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-warning rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-home-8-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">{{App\hospitals::where('hmo',auth()->user()->id)->count()}}</span></h2>
                                    <h5 class="">Registered Hospital(s)</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @php
                         $cat = App\hmo_cat::where('HMO', auth()->user()->id)->get();
                     @endphp
                     @if (!empty($cat))
                     <div class="col-md-6 col-lg-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-warning rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-women-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">{{App\hmo_cat::where('HMO',auth()->user()->id)->count()}}</span></h2>
                                    <h5 class="">Product Categories</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @else
                     <div class="col-md-6 col-lg-4">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-warning rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-women-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">{{App\HMO::where('hmo',auth()->user()->id)->count()}}</span></h2>
                                    <h5 class="">Package(s)</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                         
                     @endif
                     <!----
                     <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-danger rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-group-fill"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">3500</span></h2>
                                    <h5 class="">Patients</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-body iq-bg-info rounded">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div class="rounded-circle iq-card-icon bg-info"><i class="ri-hospital-line"></i></div>
                                 <div class="text-right">                                 
                                    <h2 class="mb-0"><span class="counter">4500</span></h2>
                                    <h5 class="">Pharmacists</h5>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>---->
                  </div>
               </div>
               <div class="col-sm-12">
                  <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-body pb-0 mt-3">       
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
                              border: none;
                              color: rgb(20, 109, 224);
                          }
                          
                          
                          .btn.btn-info.btn-sm i.fa{
                              font-size: 12px;
                              margin: 0;
                          }
                        @media only screen and (max-width: 768px) {
                 /* align glyph 
                 .left-addon .fa  { left:  0px;}*/
                 .right-addon .fa { right: 20px;}
                 
                           
                          .btn.btn-info.btn-sm{
                              background: transparent;
                              border: none;
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
                          <span class="pull-left">{{auth()->user()->hmo_org_name}}</span>
                          <span class="user-list-files d-flex float-right">
                           {!!Form::open(['action' => 'HmoController@add_cat', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                          
                           <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add New Product Category"><i class="fa fa-plus"></i></button>
                          
                           {!!Form::close()!!}
                        <!---
                             {!!Form::open(['action' => 'HmoController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                            
                             <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add New Package"><i class="fa fa-plus"></i></button>
                            
                             {!!Form::close()!!}
                                 --->
                             {!!Form::open(['action' => 'HmoController@add_hospital', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                            
                             <!---{{Form::hidden('id', auth()->user()->id)}}--->
                             <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add Hospital To HMO"><i class="ri-home-8-fill"></i></button>
                            
                             {!!Form::close()!!}
                           </span>
                     </div>   
                  </div>
                </div>
                <div class="col-lg-12" style="margin-bottom: 150px;">
                   <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                      <div class="iq-card-header d-flex justify-content-between">
                         <div class="iq-header-title">
                                       <h4 class="card-title">Your Product Categories</h4>
                        </div>
                      </div>
                      @php
                          $cats = App\hmo_cat::where('HMO',auth()->user()->id)->paginate(10);
                      @endphp
                      <div class="iq-card-body">
                         @if(count($cats) > 0)
                        <div id="js-product-list">
                           <div class="Products">
                              <ul class="product_list gridcount grid row">
                                 @foreach ($cats as $cat)
                                 <li class="product_item col-xs-12 col-sm-6 col-md-6 col-lg-4" style="list-style: none;">
                                    <div class="product-miniature">
                                       <div class="thumbnail-container">
                                          <a href="#"><img src="{{ URL::to('img/hmo/cat/'.$cat->img)}}" alt="product-image" width="120" class="img-fluid" /> </a>                                             
                                       </div>
                                       <style>
                                           span.pull-right{
                                               font-size: 10px;
                                               color: #0084ff;
                                           }
                                           span.pull-right.in{
                                               font-size: 10px;
                                               color: #4ff84f;
                                           }
                                           span.pull-right.out{
                                               font-size: 10px;
                                               color: #fa1414;
                                                            }
                                                            
                                             
                                                            .btn.btn-info.btn-sm{
                                                background: transparent;
                                                border: none;
                                                color: rgb(20, 109, 224);

                                             }
                                             .btn.btn-info.btn-sm i.fa{
                                                font-size: 12px;
                                                margin: 0;
                                             }
                                             .product-description{
                                                padding-bottom:50px;
                                             }
                          @media only screen and (max-width: 768px) {
                             
                            .btn.btn-info.btn-sm{
                                background: transparent;
                                border: none;
                                color: rgb(20, 109, 224);
                                float: right;
                                display: inline;
                            }
                            
                            .btn.btn-info.btn-sm i.fa{
                                font-size: 12px;
                                margin: 0;
                                padding: 0;
                            }
                                             .product-description{
                                                padding-bottom:80px;
                                             }
                          }
                                       </style>
                                       <div class="product-description">
                                          <h4>
                                             {{$cat->name}} 
                                             <span class="pull-right">
                                                {{App\HMO::where('cat_id',$cat->id)->count()}} Packages
                                                <br>
                                                
                                             {!!Form::open(['action' => 'HmoController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                             {{Form::hidden('id', $cat->id)}}
                                             <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add package to category.">Add Package(s)</button>
                                          
                                             {!!Form::close()!!}
                                             </span>
                                          </h4> 
                                          <div class="d-flex flex-wrap justify-content-between align-items-center">
                                              <!---
                                             <div class="product-action">
                                                <div class="add-to-cart">
                                                   <a href="pa" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart"> <i class="ri-shopping-cart-2-line"></i> </a>
                                                   
                                                </div>
                                             </div>
                                            
                                             <div class="product-price">
                                             <div class="regular-price"><b>₦/Pack</b></div>
                                             </div>--->
                                             <div class="text-center">
                                             <span class="user-list-files d-flex float-right">
                                             <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit category."><a href="packages/{{$cat->id}}/edit"><i class="fa fa-edit"></i></a></button>
                                          
                                                {!!Form::open(['action' => 'HmoController@destroy_cat', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                {{Form::hidden('id', $cat->id)}}
                                                <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Category"><i class="fa fa-trash-o"></i></button>
                                                
                                                {!!Form::close()!!}
                                             </span>
                                             </div>
                                             </div>
                                    </div>
                                 </li>
                                 @endforeach
                                 @else
                                 <p>Your Products does not have any category yet.</p>
                              </ul>
                           </div>
                        </div>
                        @endif
                      </div>
                   </div>
                </div>
@endif
@if (auth()->user()->role == 'Biochemist/Microbiologist')
           <div class="">
            @include('inc.messages')
                                
              <div class="row">
                 <div class="col-lg-6" >
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-user-profile-block">
                       <div class="iq-card-body">
                          <div class="user-details-block">
                             <div class="user-profile text-center">
                                    <img src="img/profile/{{auth()->user()->img}}"
                                    alt="profile-img" class="avatar-130 img-fluid rounded-circle">
                             </div>
                             <div class="text-center mt-3">
                                <h4><b>{{auth()->user()->name}}</b></h4>
                                <p>{{auth()->user()->role}}</p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <h4>Total Tests Carried Out</h4>
                            <h3><b>
                              {{App\Lab::where('carriedout_by', auth()->user()->pin)->count()}}</b></h3>
                         </div>
                    </div>
              <!----
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Health Curve</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div id="home-chart-06" style="height: 350px;"></div>
                       </div>
                    </div>
                 </div>                  
              ----> 
           </div>
             
              
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
                     border: none;
                     color: #02818f;
                 }
                 
                 
                 .btn.btn-info.btn-sm i.fa{
                     font-size: 12px;
                     margin: 0;
                 }
               @media only screen and (max-width: 768px) {
        /* align glyph 
        .left-addon .fa  { left:  0px;}*/
        .right-addon .fa { right: 20px;}
        
                  
                 .btn.btn-info.btn-sm{
                     background: transparent;
                     border: none;
                     color: #02818f;
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
                 <div class="col-lg-12" style="margin-top: 40px;">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                                        <h4 class="card-title">Patients Awaiting Test</h4>
                                    </div>
                       </div>
                       @php
                           $patients = App\Lab::where('status','Pending')->paginate(10);
                       @endphp
                       <div class="iq-card-body">
                        <div class="col-sm-5">
                           <div id="user_list_datatable_info" class="dataTables_filter">
                             {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                                 <div class="form-group mb-0">
                                    <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                                  
                                   <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                                 </div>
                                 {!! Form::close() !!}
                           </div>
                        </div>
                          <ul class="patient-progress m-0 p-0">
                                    @if (count($patients) > 0)
                                    @foreach ($patients as $patient)
                                    <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();">
                                                            
                                    {!! Form::open(['action' => 'LabsController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                                    **/ !!}
                                     {{Form::hidden('pin', $patient->patient_pin)}}
                                     {{Form::hidden('username', $patient->username)}}
                                    {!! Form::close() !!}
                             <li class="d-flex mb-3 align-items-center">
                                <div class="media-support-info">
                                   <h6>{{$patient->patient_name}}</h6>
                                </div>
                                         
                                         <span class="user-list-files d-flex float-right">
                                            {!!Form::open(['action' => 'LabsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                            {{Form::hidden('pin', $patient->patient_pin)}}
                                            <!--{{Form::hidden('username', $patient->username)}}--->
                                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View and Complete Test."><i class="las la-eye"></i></button>
                                           
                                            {!!Form::close()!!}
                                          </span>
                             </li> 
                                    </a>
                                    @endforeach

                                    @else
                                    <p class="text-center">No Scheduled Tests Yet</p>    
                                    @endif            
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           
                 
           
                 <div class="row">
                    <div class="col-lg-6">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                          <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                               <h4 class="card-title">Sent Notifications</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                               <a href="./notifications" class="">See all</a>
                           </div>
                          </div>
                            <!---- <div id="home-chart-03" style="height: 280px;"></div>--->
                           @if (count($notice_sents) > 0)
                           <div class="iq-card-body">
                               @foreach ($notice_sents as $notice_sent)
                               <a href="notifications/{{$notice_sent->id}}" style="text-decoration: none;">
                               <div class="media">
                                   <div class="media-body">
                                       <h5 class="mt-0 mb-0">{!!Str::words( $notice_sent->to_name,1)!!} <small
                                               class="text-muted font-size-12">{!!Str::words( $notice_sent->created_at,2)!!}</small></h5>
                                       <i class="ri-close-line float-right"></i>
                                       <p>{!!Str::words( $notice_sent->content,5)!!}</p>
                                   </div>
                               </div>
                             </a>
                               <hr>
                               @endforeach
                           @else
                           <p class="text-center">No Sent Notifications Yet</p> 
                           @endif
    
                       </div>
    
                        </div>
                       </div>
                 <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                            <h4 class="card-title">Questions</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="./questions" class="">See all questions </a>
                        </div>
                       </div>
                       <div class="iq-card-body">
                           
                          <ul class="patient-progress m-0 p-0">
                            @if (count($questions_all) > 0)
                            @foreach ($questions_all as $question_all)
                            <a href="questions/{{$question_all->id}}" >
                     <li class="d-flex mb-3 align-items-center">
                        <div class="media-support-info">
                            <small>{!!$question_all->created_at!!} </small>
                           <h6>{!!$question_all->question!!} </h6>
                           @if (auth()->user()->id == $question_all->asker_id)
                              <button class ="btn btn-info btn-sm pull-right"><a href="questions/{{$question_all->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Question"><i class="fa fa-edit"></i></a></button>
                                  {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                  {{Form::hidden('_method', 'DELETE')}}
                                 <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Delete Question"><i class="fa fa-trash-o"></i></button>
                                
                                 {!!Form::close()!!}
                           @endif
                        </div>
                            <span class="user-list-files d-flex float-right">
                                <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="fa fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                             </span>
                     </li> 
                            </a>
                            @endforeach
       
                            @else
                            <p class="text-center">No Questions in Forum Yet</p>    
                            @endif
                          </ul>
                    </div>
                    </div>
                 </div>
              </div>
              
              
              <!-- for both--->
              <div class="row">
                 <div class="col-lg-8">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Your Appointments </h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                               <i class="ri-more-fill"></i>
                               </span>
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                  <a class="dropdown-item" href="./appointments"><i class="ri-eye-line mr-2"></i>See All</a>
                               </div>
                            </div>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="table-responsive">
                              @php
                                  $appointments = App\Appointments::where('doctor',auth()->user()->pin)->paginate(8);
                              @endphp
                              @if (count($appointments) > 0)
                             <table class="table mb-0 table-borderless">
                                <thead>
                                   <tr>
                                    <th scope="col">Patient's Pin</th>
                                      <th scope="col">Patient</th>
                                      <th scope="col">Doctor</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Time</th>
                                      <th scope="col">Contact</th>
                                      <th scope="col">Action</th>

                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                   <tr>
                                       @php
                                           $patient = App\patients::where('pin', $appointment->patient)->first();
                                           $doctor = App\User::where('pin', $appointment->doctor)->first();
                                       @endphp
                                      <td>{{$appointment->patient}}</td>
                                      <td>{{$patient->name}}</td>
                                      <td>{{$doctor->name}}</td>
                                      <td>{{$appointment->date}}</td>
                                      <td>{{$appointment->time}}</td>
                                      <td><a href="tel:{{$patient->phone}}" style="text-decoration: none;">{{$patient->phone}}</a></td>
                                      <td>
                                        <div class="dropdown">
                                           <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                           <i class="ri-more-fill"></i>
                                           </span>
                                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                           <a class="dropdown-item" href="appointments/{{$appointment->id}}/edit">
                                             <button class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment"><i class="ri-pencil-fill mr-2"></i>Edit</button>
                                           </a>
                                           
                                           <a class="dropdown-item">
                                              {!!Form::open(['action' => ['PatientsController@destroy', $appointment->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                              {{Form::hidden('id', $appointment->id)}}
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
                                       {{$appointments->links()}}
                               </div>
                           </div>
                               @else
                               <p>No Record Found</p>   
                             @endif
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                          <h4 class="card-title">Colleague</h4>
                          </div>
                       </div>
                       @php
                       $doctors = App\HospitalDoctors::where('h_id', auth()->user()->h_id)->where('role', auth()->user()->role)->get();

                       @endphp
                        <div class="iq-card-body">
                            @if (count($doctors) > 0)
                          <ul class="doctors-lists m-0 p-0">
                            @foreach ($doctors as $doctor)
                            @php
                                $detail = App\User::where('pin', $doctor->doctor_pin)->first()
                            @endphp
                             <li class="d-flex mb-4 align-items-center">
                                <div class="user-img img-fluid"><img src="img/profile/{{$detail->img}}" alt="doctor image" class="rounded-circle avatar-40"></div>
                                <div class="media-support-info ml-3">
                                   <h6>Nurse {{$detail->name}}</h6>
                                   <p class="mb-0 font-size-12">{{$detail->role}}</p>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                   <div class="dropdown show">
                                      <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown" aria-expanded="true" role="button">
                                         <i class="ri-more-2-line"></i>
                                      </span>
                                      <div class="dropdown-menu dropdown-menu-right">
                                         <a class="dropdown-item" href="#">
                                           
                                            {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                            {{Form::hidden('pin', $detail->pin)}}
                                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="ri-message-fill"></i> Message</button>
                                           
                                            {!!Form::close()!!}
                                        </a>
                                      </div>
                                   </div>
                                </div>
                             </li> 
                              
                             @endforeach                             
                          </ul>
                          @else
                          <p>No Record Found</p> 
                          @endif
                          <a href="./doctors" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All</a>
                       </div>
                    </div>
                 </div>
               
              @endif





              @if (auth()->user()->role == 'Pharmacist')
              <div class="">
               @include('inc.messages')
                                   
                 <div class="row" style="margin-bottom: 250px;">
                    <div class="col-lg-12">
                       <div class="">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                                         <h4 class="card-title">Search For Patient To Sell Drug</h4>
                           </div>
                        </div>
                           <div class="iq-card-body">
                              {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                                  <div class="form-group mb-0">
                                     <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                                   
                                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                                  </div>
                                  {!! Form::close() !!}
                            </div>
                       </div>
                       </div>
                       
                    <div class="col-lg-12">
                     <div class="">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                <h4 class="card-title">Forum Questions</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="./questions" class="">See all questions </a>
                            </div>
                           </div>
                           <div class="iq-card-body">
                               
                              <ul class="patient-progress m-0 p-0">
                                @if (count($questions_all) > 0)
                                @foreach ($questions_all as $question_all)
                                <a href="questions/{{$question_all->id}}" >
                         <li class="d-flex mb-3 align-items-center">
                            <div class="media-support-info">
                                <small>{!!$question_all->created_at!!} </small>
                               <h6>{!!$question_all->question!!} </h6>
                               @if (auth()->user()->id == $question_all->asker_id)
                                  <button class ="btn btn-info btn-sm pull-right"><a href="questions/{{$question_all->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Question"><i class="fa fa-edit"></i></a></button>
                                      {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('_method', 'DELETE')}}
                                     <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Delete Question"><i class="fa fa-trash-o"></i></button>
                                    
                                     {!!Form::close()!!}
                               @endif
                            </div>
                                <span class="user-list-files d-flex float-right">
                                    <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="fa fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                                 </span>
                         </li> 
                                </a>
                                @endforeach
           
                                @else
                                <p class="text-center">No Questions in Forum Yet</p>    
                                @endif
                              </ul>
                        </div>
                        </div>
                     </div>
                    </div>
                     </div>
                 <!----
                    <div class="col-lg-4">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                          <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                                <h4 class="card-title">Health Curve</h4>
                             </div>
                          </div>
                          <div class="iq-card-body">
                             <div id="home-chart-06" style="height: 350px;"></div>
                          </div>
                       </div>
                    </div>                  
                 ----> 
              </div>
                
                 @endif



                 


              @if (auth()->user()->role == 'Ward Maid')
              <div class="">
               @include('inc.messages')
                                   
                 <div class="row" style="margin-bottom: 250px;">
                  <!---
                    <div class="col-lg-12">
                       <div class="container">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                                         <h4 class="card-title">Search For Patient To Sell Drug</h4>
                           </div>
                        </div>
                           <div class="iq-card-body">
                              {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                                  <div class="form-group mb-0">
                                     <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                                   
                                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                                  </div>
                                  {!! Form::close() !!}
                            </div>
                       </div>
                       </div>--->
                       
                    <div class="col-lg-12">
                     <div class="">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                <h4 class="card-title">Admitted Patients</h4>
                            </div>
                            <!--
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="./questions" class="">See all questions </a>
                            </div>-->
                           </div>
                           <div class="iq-card-body">
                              <div class="iq-card-body">
                                 <div class="table-responsive">
                                     @php
                                         $patients = App\patients::where('status','Admitted')->paginate(10);
                                        
                                     @endphp
                                     @if (count($patients) > 0)
                                    <table class="table mb-0 table-borderless">
                                       <thead>
                                          <tr>
                                           <th scope="col">Patient's Pin</th>
                                             <th scope="col">Patient Name</th>
                                             <th scope="col">Admitted By</th>
                                             <th scope="col">Ward</th>
                                             <th scope="col">Next Of Kin</th>
                                             <th scope="col">Relationship</th>
                                             <th scope="col">Contact</th>
                                             <th scope="col">Date</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($patients as $patient)
                                          <tr>
                                              @php
                                                 $get_detail = App\Admission::where('patient', $patient->pin)->first();
                                                 $doctor = App\User::where('pin', $get_detail->admitted_by)->first();
                                              @endphp
                                             <td>{{$patient->pin}}</td>
                                             <td>{{$patient->name}}</td>
                                             <td>Dr. {{$doctor->name}}</td>
                                             <td>{{$get_detail->ward}}</td>
                                             <td>{{$patient->nok}}</td>
                                             <td>{{$patient->nok_relation}}</td>
                                             <td><a href="tel:{{$patient->nok_phone}}" style="text-decoration: none;">{{$patient->nok_phone}}</a></td>
                                             
                                             <td>{{$get_detail->created_at}}</td>
                                          </tr>
                                         
                                          @endforeach
                                       </tbody>
                                    </table>
                                        
                                  <div class="col-md-6">
                                      <div style="text-align:right;">
                                              <!-----The pagination link----->
                                              {{$patients->links()}}
                                      </div>
                                  </div>
                                      @else
                                      <p>No Record Found</p>   
                                    @endif
                                 </div>
                              </div>
                           </div>
                    </div>
                       
                    <div class="col-lg-12">
                     <div class="">
                        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                <h4 class="card-title">Forum Questions</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="./questions" class="">See all questions </a>
                            </div>
                           </div>
                           <div class="iq-card-body">
                               
                              <ul class="patient-progress m-0 p-0">
                                @if (count($questions_all) > 0)
                                @foreach ($questions_all as $question_all)
                                <a href="questions/{{$question_all->id}}" >
                         <li class="d-flex mb-3 align-items-center">
                            <div class="media-support-info">
                                <small>{!!$question_all->created_at!!} </small>
                               <h6>{!!$question_all->question!!} </h6>
                               @if (auth()->user()->id == $question_all->asker_id)
                                  <button class ="btn btn-info btn-sm pull-right"><a href="questions/{{$question_all->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Question"><i class="fa fa-edit"></i></a></button>
                                      {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                      {{Form::hidden('_method', 'DELETE')}}
                                     <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Delete Question"><i class="fa fa-trash-o"></i></button>
                                    
                                     {!!Form::close()!!}
                               @endif
                            </div>
                                <span class="user-list-files d-flex float-right">
                                    <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="fa fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                                 </span>
                         </li> 
                                </a>
                                @endforeach
           
                                @else
                                <p class="text-center">No Questions in Forum Yet</p>    
                                @endif
                              </ul>
                        </div>
                        </div>
                     </div>
                    </div>
                     </div>
                 <!----
                    <div class="col-lg-4">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                          <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                                <h4 class="card-title">Health Curve</h4>
                             </div>
                          </div>
                          <div class="iq-card-body">
                             <div id="home-chart-06" style="height: 350px;"></div>
                          </div>
                       </div>
                    </div>                  
                 ----> 
              </div>
                
         @endif


@if (auth()->user()->role == 'Nurse')
           <div class="">
            @include('inc.messages')
                                
              <div class="row">
                 <div class="col-lg-6" >
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-user-profile-block">
                       <div class="iq-card-body">
                          <div class="user-details-block">
                             <div class="user-profile text-center">
                                    <img src="img/profile/{{auth()->user()->img}}"
                                    alt="profile-img" class="avatar-130 img-fluid rounded-circle">
                             </div>
                             <div class="text-center mt-3">
                                <h4><b>{{auth()->user()->name}}</b></h4>
                                <p>{{auth()->user()->role}}</p>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <h4>New Notifications</h4>
                            <h3><b>
                              {{App\Notifications::where('to_email', auth()->user()->email)->count()}}</b></h3>
                         </div>
                    </div>
              <!----
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Health Curve</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div id="home-chart-06" style="height: 350px;"></div>
                       </div>
                    </div>
                 </div>                  
              ----> 
           </div>
             
              
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
                     border: none;
                     color: #02818f;
                 }
                 
                 
                 .btn.btn-info.btn-sm i.fa{
                     font-size: 12px;
                     margin: 0;
                 }
               @media only screen and (max-width: 768px) {
        /* align glyph 
        .left-addon .fa  { left:  0px;}*/
        .right-addon .fa { right: 20px;}
        
                  
                 .btn.btn-info.btn-sm{
                     background: transparent;
                     border: none;
                     color: #02818f;
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
                 <div class="col-lg-12" style="margin-top: 40px;">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                                        <h4 class="card-title">Your Hospital Patients</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <a href="patients">See All</a>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        <div class="col-sm-5">
                           <div id="user_list_datatable_info" class="dataTables_filter">
                             {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                                 <div class="form-group mb-0">
                                    <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                                  
                                   <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                                 </div>
                                 {!! Form::close() !!}
                           </div>
                        </div>
                          <ul class="patient-progress m-0 p-0">
                                    @if (count($patients) > 0)
                                    @foreach ($patients as $patient)
                                    <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();">
                                                            
                                    {!! Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                                    **/ !!}
                                     {{Form::hidden('pin', $patient->pin)}}
                                     {{Form::hidden('username', $patient->username)}}
                                    {!! Form::close() !!}
                             <li class="d-flex mb-3 align-items-center">
                                <div class="media-support-info">
                                   <h6>{{$patient->name}}</h6>
                                </div>
                                @if (auth()->user()->role == 'Doctor')
                                    
                                    <span class="user-list-files d-flex float-right">
                                    
                                    {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $patient->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" title="Add New Medical Record"><i class="fa fa-plus"></i></button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $patient->pin)}}
                                    {{Form::hidden('username', $patient->username)}}
                                    <button type="submit" class ="btn btn-info btn-sm" title="View Medical History"><i class="fa fa-bars"></i></button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'PatientsController@transfer', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $patient->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" title="Transfer Patient"><i class="fa fa-paper-plane-o"></i></button>
                                   
                                    {!!Form::close()!!}
                                    {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                    {{Form::hidden('pin', $patient->pin)}}
                                    <button type="submit" class ="btn btn-info btn-sm" title="Message Patient"><i class="fa fa-envelope"></i></button>
                                   
                                    {!!Form::close()!!}


                                        {!!Form::open(['action' => ['PatientsController@destroy', $patient->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                        {{Form::hidden('email', $patient->email)}}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        <button type="submit" class ="btn btn-info btn-sm" title="Delete Patient"><i class="fa fa-trash-o"></i></button>
                                       
                                        {!!Form::close()!!}
                                     </span>
                                     @endif
                                     @if (auth()->user()->role == 'Nurse')
                                         
                                         <span class="user-list-files d-flex float-right">
                                            {!!Form::open(['action' => 'ConsortationsController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                            {{Form::hidden('pin', $patient->pin)}}
                                            {{Form::hidden('username', $patient->username)}}
                                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Schedule Consortation With A Doctor"><i class="las la-radiation"></i></button>
                                           
                                            {!!Form::close()!!}
                                            {!!Form::open(['action' => 'ConsortationsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                            {{Form::hidden('pin', $patient->pin)}}
                                            {{Form::hidden('username', $patient->username)}}
                                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Consortation History"><i class="las la-city"></i></button>
                                           
                                            {!!Form::close()!!}
                                         {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                         {{Form::hidden('pin', $patient->pin)}}
                                         {{Form::hidden('username', $patient->username)}}
                                         <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="fa fa-bars"></i></button>
                                        
                                         {!!Form::close()!!}
                                          </span>
                                          @endif
                             </li> 
                                    </a>
                                    @endforeach

                                    @else
                                    <p class="text-center">No Patients Yet</p>    
                                    @endif            
                          </ul>
                       </div>
                    </div>
                 </div>
           </div>
                 
           
                 <div class="row">
                    <div class="col-lg-6">
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                          <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                               <h4 class="card-title">Sent Notifications</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                               <a href="./notifications" class="">See all</a>
                           </div>
                          </div>
                            <!---- <div id="home-chart-03" style="height: 280px;"></div>--->
                           @if (count($notice_sents) > 0)
                           <div class="iq-card-body">
                               @foreach ($notice_sents as $notice_sent)
                               <a href="notifications/{{$notice_sent->id}}" style="text-decoration: none;">
                               <div class="media">
                                   <div class="media-body">
                                       <h5 class="mt-0 mb-0">{!!Str::words( $notice_sent->to_name,1)!!} <small
                                               class="text-muted font-size-12">{!!Str::words( $notice_sent->created_at,2)!!}</small></h5>
                                       <i class="ri-close-line float-right"></i>
                                       <p>{!!Str::words( $notice_sent->content,5)!!}</p>
                                   </div>
                               </div>
                             </a>
                               <hr>
                               @endforeach
                           @else
                           <p class="text-center">No Sent Notifications Yet</p> 
                           @endif
                           </div>
                           </div>  
                    </div>
                 <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                            <h4 class="card-title">Questions</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="./questions" class="">See all questions </a>
                        </div>
                       </div>
                       <div class="iq-card-body">
                           
                          <ul class="patient-progress m-0 p-0">
                            @if (count($questions_all) > 0)
                            @foreach ($questions_all as $question_all)
                            <a href="questions/{{$question_all->id}}" >
                     <li class="d-flex mb-3 align-items-center">
                        <div class="media-support-info">
                            <small>{!!$question_all->created_at!!} </small>
                           <h6>{!!$question_all->question!!} </h6>
                           @if (auth()->user()->id == $question_all->asker_id)
                              <button class ="btn btn-info btn-sm pull-right"><a href="questions/{{$question_all->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Question"><i class="fa fa-edit"></i></a></button>
                                  {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                  {{Form::hidden('_method', 'DELETE')}}
                                 <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Delete Question"><i class="fa fa-trash-o"></i></button>
                                
                                 {!!Form::close()!!}
                           @endif
                        </div>
                            <span class="user-list-files d-flex float-right">
                                <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="fa fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                             </span>
                     </li> 
                            </a>
                            @endforeach
       
                            @else
                            <p class="text-center">No Questions in Forum Yet</p>    
                            @endif
                          </ul>
                    </div>
                    </div>
                 </div>
              </div>
              <!-- for both--->
              <div class="row">
                 <div class="col-lg-8">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Your Appointments </h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                               <i class="ri-more-fill"></i>
                               </span>
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                  <a class="dropdown-item" href="./appointments"><i class="ri-eye-line mr-2"></i>See All</a>
                               </div>
                            </div>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="table-responsive">
                              @php
                                  $appointments = App\Appointments::where('doctor',auth()->user()->pin)->paginate(8);
                              @endphp
                              @if (count($appointments) > 0)
                             <table class="table mb-0 table-borderless">
                                <thead>
                                   <tr>
                                    <th scope="col">Patient's Pin</th>
                                      <th scope="col">Patient</th>
                                      <th scope="col">Doctor</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Time</th>
                                      <th scope="col">Contact</th>
                                      <th scope="col">Action</th>

                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                   <tr>
                                       @php
                                           $patient = App\patients::where('pin', $appointment->patient)->first();
                                           $doctor = App\User::where('pin', $appointment->doctor)->first();
                                       @endphp
                                      <td>{{$appointment->patient}}</td>
                                      <td>{{$patient->name}}</td>
                                      <td>{{$doctor->name}}</td>
                                      <td>{{$appointment->date}}</td>
                                      <td>{{$appointment->time}}</td>
                                      <td><a href="tel:{{$patient->phone}}" style="text-decoration: none;">{{$patient->phone}}</a></td>
                                      <td>
                                        <div class="dropdown">
                                           <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                           <i class="ri-more-fill"></i>
                                           </span>
                                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                           <a class="dropdown-item" href="appointments/{{$appointment->id}}/edit">
                                             <button class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment"><i class="ri-pencil-fill mr-2"></i>Edit</button>
                                           </a>
                                           
                                           <a class="dropdown-item">
                                              {!!Form::open(['action' => ['PatientsController@destroy', $appointment->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                              {{Form::hidden('id', $appointment->id)}}
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
                                       {{$appointments->links()}}
                               </div>
                           </div>
                               @else
                               <p>No Record Found</p>   
                             @endif
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Nurses List</h4>
                          </div>
                       </div>
                       @php
                       $doctors = App\HospitalDoctors::where('h_id', auth()->user()->h_id)->where('role', 'Nurse')->get();

                       @endphp
                        <div class="iq-card-body">
                            @if (count($doctors) > 0)
                          <ul class="doctors-lists m-0 p-0">
                            @foreach ($doctors as $doctor)
                            @php
                                $detail = App\User::where('pin', $doctor->doctor_pin)->first()
                            @endphp
                             <li class="d-flex mb-4 align-items-center">
                                <div class="user-img img-fluid"><img src="img/profile/{{$detail->img}}" alt="doctor image" class="rounded-circle avatar-40"></div>
                                <div class="media-support-info ml-3">
                                   <h6>Nurse {{$detail->name}}</h6>
                                   <p class="mb-0 font-size-12">{{$detail->role}}</p>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                   <div class="dropdown show">
                                      <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown" aria-expanded="true" role="button">
                                         <i class="ri-more-2-line"></i>
                                      </span>
                                      <div class="dropdown-menu dropdown-menu-right">
                                         <a class="dropdown-item" href="#">
                                           
                                            {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                            {{Form::hidden('pin', $detail->pin)}}
                                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="ri-message-fill"></i> Message</button>
                                           
                                            {!!Form::close()!!}
                                        </a>
                                      </div>
                                   </div>
                                </div>
                             </li> 
                              
                             @endforeach                             
                          </ul>
                          @else
                          <p>No Record Found</p> 
                          @endif
                          <a href="./doctors" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All Nurses </a>
                       </div>
                    </div>
                 </div>
               
              @endif








@if (auth()->user()->role == 'Doctor')
           <div class="">
            @include('inc.messages')
                                
              <div class="row">
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-user-profile-block">
                       <div class="iq-card-body">
                          <div class="user-details-block">
                             <div class="user-profile text-center">
                                    <img src="img/profile/{{auth()->user()->img}}"
                                    alt="profile-img" class="avatar-130 img-fluid rounded-circle">
                             </div>
                             <div class="text-center mt-3">
                                <h4><b>{{auth()->user()->name}}</b></h4>
                                <p>{{auth()->user()->role}}</p>
                             </div>
                             <hr>
                             <ul class="doctoe-sedual d-flex align-items-center justify-content-between p-0">
                                <li class="text-center">
                                   <h3 class="counter">
                                       @php
                                           $one = App\Operations::where('doc_1', auth()->user()->pin)->count();
                                           $two = App\Operations::where('doc_2', auth()->user()->pin)->count();
                                           $three = App\Operations::where('doc_3', auth()->user()->pin)->count();
                                           $four = App\Operations::where('doc_4', auth()->user()->pin)->count();
                                           $five = App\Operations::where('doc_5', auth()->user()->pin)->count();
                                       @endphp
                                       {{ $one + $two + $three + $three + $four + $five}}
                                    </h3>
                                   <span>Operations</span>
                                 </li>
                                 <li class="text-center">
                                   <h3 class="counter">{{App\Consortations::where('doc_pin', auth()->user()->pin)->count()}}</h3>
                                   <span>Consultations</span>
                                 </li>
                             </ul>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-user-profile-block">
                       <div class="iq-card-body">
                        <h4>TOTAL PATIENTS</h4>
                        <h3><b>
                            {{App\patients::where('doc_email', auth()->user()->email)->whereNotNull('username')->count()}}
                        </b></h3>
                             <div id="wave-chart-7"></div>
                            </div>
                 </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                       <div class="iq-card-body">
                          <h6>PATIENTS ASSIGNED FOR TODAY</h6>
                          <h3><b>{{App\Consortations::where('doc_pin', auth()->user()->pin)->whereDay('created_at', now()->day)->count()}}</b></h3>
                       </div>
                    </div>
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                       <div class="iq-card-body">
                          <h6>NEW PATIENTS</h6>
                          <h3><b>{{App\patients::where('doc_email', auth()->user()->email)->where('created_at', '>=', Carbon\Carbon::today())->count()}}</b></h3>
                       </div>
                    </div>
                 </div>
            </div>
              <!----
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Health Curve</h4>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div id="home-chart-06" style="height: 350px;"></div>
                       </div>
                    </div>
                 </div>                  
              ---->  
                 <div class="col-lg-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                                        <h4 class="card-title">Your Assigned Patients</h4>
                                    </div>
                                    <div class="iq-card-header-toolbar d-flex align-items-center">
                                        <a href="patients">See All Patients</a>
                          </div>
                       </div>
                       <div class="iq-card-body">
                        <div class="col-sm-5">
                           <div id="user_list_datatable_info" class="dataTables_filter">
                             {!! Form::open(['action' => 'PatientsController@search', 'method' => 'POST', 'class' => 'mr-3 position-relative']) !!}
                                 <div class="form-group mb-0">
                                    <input type="search" class="form-control" id="exampleInputSearch" name="pin" placeholder="Enter MedicPin" aria-controls="user-list-table">
                                  
                                   <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Search</button>
                                 </div>
                                 {!! Form::close() !!}
                           </div>
                        </div>
                          <ul class="patient-progress m-0 p-0">
                            @php
                                $patients = App\Consortations::where('doc_pin', auth()->user()->pin)->whereDay('created_at', now()->day)->paginate(5);
                            @endphp

                                    @if (count($patients) > 0)
                                    @foreach ($patients as $patient)
                                    <a href="javascript:{}" onclick="document.getElementById('my_form_1').submit();">
                                                            
                                    {!! Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'id' => 'my_form_1']) /** The action should be the block of code in the store function in PostsController
                                    **/ !!}
                                     {{Form::hidden('pin', $patient->patient_pin)}}
                                    {!! Form::close() !!}
                             <li class="d-flex mb-3 align-items-center">
                                <div class="media-support-info">
                                   <h6>{{$patient->patient_name}}</h6>
                                </div>
                                    <span class="user-list-files d-flex float-right"> @if (auth()->user()->role == 'Doctor')
                                           
                                       {!!Form::open(['action' => 'PatientsController@add_record', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                       {{Form::hidden('pin', $patient->pin)}}
                                       <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Add New Medical Record"><i class="la la-notes-medical"></i></button>
                                      
                                       {!!Form::close()!!}
                                       {!!Form::open(['action' => 'RecordsController@index', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                       {{Form::hidden('pin', $patient->pin)}}
                                       {{Form::hidden('username', $patient->username)}}
                                       <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="View Medical History"><i class="la la-book-medical"></i></button>
                                      
                                       {!!Form::close()!!}
                                       @if ($patient->status == 'Admitted')
                                       {!!Form::open(['action' => ['AdmissionController@update', $patient->pin], 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                       {{Form::hidden('pin', $patient->pin)}}
                                       {{Form::hidden('_method', 'PUT')}}
                                       <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Discharge Patient"><i class="la la-procedures"></i></button>
                                       {!!Form::close()!!}
                                         @else
                                         {!!Form::open(['action' => 'AdmissionController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                         {{Form::hidden('pin', $patient->pin)}}
                                         <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Admit Patient"><i class="la la-bed"></i></button>
                                         {!!Form::close()!!}  
                                       @endif
                                       {!!Form::open(['action' => 'PatientsController@transfer', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                       {{Form::hidden('pin', $patient->pin)}}
                                       <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Transfer Patient"><i class="fa fa-paper-plane-o"></i></button>
                                      
                                       {!!Form::close()!!}
                                       {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                       {{Form::hidden('pin', $patient->pin)}}
                                       <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Patient"><i class="fa fa-envelope"></i></button>
                                      
                                       {!!Form::close()!!}
   
   
                                           {!!Form::open(['action' => ['PatientsController@destroy', $patient->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                           {{Form::hidden('email', $patient->email)}}
                                           {{Form::hidden('_method', 'DELETE')}}
                                           <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Patient"><i class="fa fa-trash-o"></i></button>
                                          
                                           {!!Form::close()!!}
                                        @endif
                                     </span>
                             </li> 
                                    </a>
                                    @endforeach
                                    <div class="col-md-6">
                                        <div style="text-align:right;">
                                                <!-----The pagination link----->
                                                {{$patients->links()}}
                                        </div>
                                    </div>

                                    @else
                                    <p class="text-center">No Patients Assigned Yet</p>    
                                    @endif            
                          </ul>
                       </div>
                    </div>
                 </div>
              <div class="row" style="margin-top: 20px;">
                 <div class="col-lg-4">
                    <!---
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Nearest Treatment</h4>
                          </div>
                       </div>
                       <div class="iq-card-body smaill-calender-home">
                          <input type="text" class="flatpicker d-none">
                       </div>
                    </div>---->
                    
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Daily Tasks</h4>
                        </div>
                       
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <a href="schedule/create">Create Task</a>
                            <!--<ul class="nav nav-pills" id="myTab" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                              </li>
                           </ul>---->
                        </div>
                     </div>
                     <div class="iq-card-body">
                        @php
                            $todos = App\todo::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->whereDay('date', now()->day)->get();
                        @endphp
                        @if (count($todos) > 0)
                        <div class="tab-content" id="myTabContent">
                           
                           <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              @foreach ($todos as $todo)
                              <div class="d-flex tasks-card" role="alert">
                                 <div class="custom-control custom-checkbox">
                                    <!--<input type="checkbox" class="custom-control-input" id="customCheck112">-->
                                    
                                    <label class="" for="customCheck112"><a href="schedule/{{$todo->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit/Move Schedule"><i class="fa fa-edit"></i></a>{{$todo->title}}</label>
                                 </div>
                                 {!!Form::open(['action' => ['TodoController@destroy', $todo->id], 'method' => 'POST', 'id' => 'my_form_1'])!!}
                                
                                 {{Form::hidden('_method', 'DELETE')}}
                                 <button type="submit" class="close ml-auto" data-dismiss="" aria-label="Close" data-toggle="tooltip" data-placement="top" data-original-title="Delete schedule">
                                    <i class="ri-close-line"></i>
                                    </button>
                                 {!!Form::close()!!}
                                
                              </div>
                              @endforeach
                           </div>
                        </div>
                        @else
                            <p>Nothing to show for today, kindly add to your to do list <a href="schedule/create">here</a></p>
                           
                            
                        @endif
                     </div>
                  </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-body">
                            <h4>New Notifications</h4>
                            <h3><b>
                              {{App\Notifications::where('to_email', auth()->user()->email)->count()}}</b></h3>
                         </div>
                         <div id="wave-chart-8"></div>
                    </div>
                                
              </div>
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Hospital Management</h4>
                          </div>
                       </div>
                       <div class="iq-card-body hospital-mgt">
                          <div class="progress mb-3" style="height: 30px;">
                             <div class="progress-bar bg-primary" role="progressbar" style="width: 20%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">OPD</div>
                             <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">80%</div>
                          </div>
                          <div class="progress mb-3" style="height: 30px;">
                             <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Treatment</div>
                             <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">70%</div>
                          </div>
                          <div class="progress mb-3" style="height: 30px;">
                             <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Laboratory Test</div>
                             <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">85%</div>
                          </div>
                          <div class="progress mb-3" style="height: 30px;">
                             <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">New Patient</div>
                             <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">70%</div>
                          </div>
                          <div class="progress mb-3" style="height: 30px;">
                             <div class="progress-bar bg-primary" role="progressbar" style="width: 35%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Doctors</div>
                             <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">95%</div>
                          </div>
                          <div class="progress" style="height: 30px;">
                             <div class="progress-bar bg-primary" role="progressbar" style="width: 28%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Discharge</div>
                             <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">35%</div>
                          </div>
                       </div>
                    </div>           
              </div>
              
             
              
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
                     border: none;
                     color: #02818f;
                 }
                 
                 
                 .btn.btn-info.btn-sm i.fa{
                     font-size: 12px;
                     margin: 0;
                 }
               @media only screen and (max-width: 768px) {
        /* align glyph 
        .left-addon .fa  { left:  0px;}*/
        .right-addon .fa { right: 20px;}
        
                  
                 .btn.btn-info.btn-sm{
                     background: transparent;
                     border: none;
                     color: #02818f;
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
           </div>
                 
           
                 <div class="row">
                    <div class="col-lg-6">
                       <!--
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                          <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                               <h4 class="card-title">Sent Notifications</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                               <a href="./notifications" class="">See all</a>
                           </div>
                          </div>--->
                            <!---- <div id="home-chart-03" style="height: 280px;"></div>--->
                            <!---
                           @if (count($notice_sents) > 0)
                           <div class="iq-card-body">
                               @foreach ($notice_sents as $notice_sent)
                               <a href="notifications/{{$notice_sent->id}}" style="text-decoration: none;">
                               <div class="media">
                                   <div class="media-body">
                                       <h5 class="mt-0 mb-0">{!!Str::words( $notice_sent->to_name,1)!!} <small
                                               class="text-muted font-size-12">{!!Str::words( $notice_sent->created_at,2)!!}</small></h5>
                                       <i class="ri-close-line float-right"></i>
                                       <p>{!!Str::words( $notice_sent->content,5)!!}</p>
                                   </div>
                               </div>
                             </a>
                               <hr>
                               @endforeach
                           @else
                           <p class="text-center">No Sent Notifications Yet</p> 
                           @endif
                           </div>--->
                       <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                             <h4 class="card-title">Have A Question?</h4>
                             <small>Ask your fellow doctors on MedicPin</small>
                         </div>
                         <div class="iq-card-header-toolbar d-flex align-items-center">
                             <a href="./notifications" class="">See all</a>
                         </div>
                        </div>
                          <!---- <div id="home-chart-03" style="height: 280px;"></div>--->
                         <div class="iq-card-body">
                            {!! Form::open(['action' => 'QuestionsController@store', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                            **/ !!}
                                        <div class="form-group">
                                            <p>Ask whatever is it on your mind and a specialist/colleague will answer you ASAP</p>
                                           <textarea class="form-control" id="question" name="question" placeholder="Your question here..."></textarea>
                                        </div>
                                        <div class="form-group">
                                          <select class="form-control mb-0" id="selectex" name="expertise">
                                             <option value="">--Who should answer?--</option>
                                             <option value="All Doctors">All Doctors</option>
                                             <option value="Allergists/Immunologist">Allergists/Immunologist</option>
                                             <option value="Anesthesiologist">Anesthesiologist</option>
                                             <option value="Cardiologist">Cardiologist</option>
                                             <option value="Colon and Rectal Surgeon">Colon and Rectal Surgeon</option>
                                             <option value="Critical Care Medicine Specialist">Critical Care Medicine Specialist</option>
                                             <option value="Dermatologist">Dermatologist</option>
                                             <option value="Endocrinologist">Endocrinologist</option>
                                             <option value="Emergency Medicine Specialist">Emergency Medicine Specialist</option>
                                             <option value="Family Physician">Family Physician</option>
                                             <option value="Gastroenterologist">Gastroenterologist</option>
                                             <option value="Geriatric Medicine Specialist">Geriatric Medicine Specialist</option>
                                             <option value="Hematologist">Hematologist</option>
                                             <option value="Hospice and Palliative Medicine Specialist">Hospice and Palliative Medicine Specialist</option>
                                             <option value="Infectious Disease Specialist">Infectious Disease Specialist</option>
                                             <option value="Internist">Internist</option>
                                             <option value="Medical Geneticist">Medical Geneticist</option>
                                             <option value="Nephrologist">Nephrologist</option>
                                             <option value="Neurologist">Neurologist</option>
                                             <option value="Obstetricians and Gynecologist">Obstetricians and Gynecologist</option>
                                             <option value="Oncologist">Oncologist</option>
                                             <option value="Ophthalmologist">Ophthalmologist</option>
                                             <option value="Osteopath">Osteopath</option>
                                             <option value="Otolaryngologist">Otolaryngologist</option>
                                             <option value="Pathologist">Pathologist</option>
                                             <option value="Pediatrician">Pediatrician</option>
                                             <option value="Physiatrist">Physiatrist</option>
                                             <option value="Plastic Surgeon">Plastic Surgeon</option>
                                             <option value="Podiatrist">Podiatrist</option>
                                             <option value="Preventive Medicine Specialist">Preventive Medicine Specialist</option>
                                             <option value="Psychiatrist">Psychiatrist</option>
                                             <option value="Pulmonologist">Pulmonologist</option>
                                             <option value="Radiologist">Radiologist</option>
                                             <option value="Rheumatologist">Rheumatologist</option>
                                             <option value="Sleep Medicine Specialist">Sleep Medicine Specialist</option>
                                             <option value="Sports Medicine Specialist">Sports Medicine Specialist</option>
                                             <option value="General Surgeon">General Surgeon</option>
                                             <option value="Urologist">Urologist</option>
                                          </select>
                                       </div>
                                    <button type="submit" class="btn btn-primary">Ask Question</button>
                                    {!! Form::close() !!}
                         </div>
                      </div>    
                          </div>
                 <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                            <h4 class="card-title">Questions</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <a href="./questions" class="">See all questions </a>
                        </div>
                       </div>
                       <div class="iq-card-body">
                           
                          <ul class="patient-progress m-0 p-0">
                            @if (count($questions_all) > 0)
                            @foreach ($questions_all as $question_all)
                            <a href="questions/{{$question_all->id}}" >
                     <li class="d-flex mb-3 align-items-center">
                        <div class="media-support-info">
                            <small>{!!$question_all->created_at!!} </small>
                           <h6>{!!$question_all->question!!} </h6>
                           @if (auth()->user()->id == $question_all->asker_id)
                              <button class ="btn btn-info btn-sm pull-right"><a href="questions/{{$question_all->id}}/edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Question"><i class="fa fa-edit"></i></a></button>
                                  {!!Form::open(['action' => ['QuestionsController@destroy', $question_all->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                  {{Form::hidden('_method', 'DELETE')}}
                                 <button type="submit" class ="btn btn-info btn-sm pull-right" data-toggle="tooltip" data-placement="top" data-original-title="Delete Question"><i class="fa fa-trash-o"></i></button>
                                
                                 {!!Form::close()!!}
                           @endif
                        </div>
                            <span class="user-list-files d-flex float-right">
                                <a href="questions/{{$question_all->id}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View answers"> <i class="fa fa-comments"></i>({{App\Answers::where('question_id', $question_all->id)->count()}})</a>
                             </span>
                     </li> 
                            </a>
                            @endforeach
       
                            @else
                            <p class="text-center">No Questions in Forum Yet</p>    
                            @endif
                          </ul>
                    </div>
                    </div>
                 </div>
              </div>
              <!-- for both--->
              <div class="row">
                 <div class="col-lg-8">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Your Appointments </h4>
                          </div>
                          <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                               <i class="ri-more-fill"></i>
                               </span>
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                  <a class="dropdown-item" href="./appointments"><i class="ri-eye-line mr-2"></i>See All</a>
                               </div>
                            </div>
                          </div>
                       </div>
                       <div class="iq-card-body">
                          <div class="table-responsive">
                              @php
                                  $appointments = App\Appointments::where('doctor',auth()->user()->pin)->orderby('date', 'desc')->paginate(8);
                              @endphp
                              @if (count($appointments) > 0)
                             <table class="table mb-0 table-borderless">
                                <thead>
                                   <tr>
                                    <th scope="col">Patient's Pin</th>
                                      <th scope="col">Patient</th>
                                      <th scope="col">Doctor</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Time</th>
                                      <th scope="col">Contact</th>
                                      <th scope="col">Action</th>

                                   </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                   <tr>
                                       @php
                                           $patient = App\patients::where('pin', $appointment->patient)->first();
                                           $doctor = App\User::where('pin', $appointment->doctor)->first();
                                       @endphp
                                      <td>{{$appointment->patient}}</td>
                                      <td>{{$patient->name}}</td>
                                      <td>{{$doctor->name}}</td>
                                      <td>{{$appointment->date}}</td>
                                      <td>{{$appointment->time}}</td>
                                      <td><a href="tel:{{$patient->phone}}" style="text-decoration: none;">{{$patient->phone}}</a></td>
                                      <td>
                                        <div class="dropdown">
                                           <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                           <i class="ri-more-fill"></i>
                                           </span>
                                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                           <a class="dropdown-item" href="appointments/{{$appointment->id}}/edit">
                                             <button class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Appointment"><i class="ri-pencil-fill mr-2"></i>Edit</button>
                                           </a>
                                           
                                           <a class="dropdown-item">
                                              {!!Form::open(['action' => ['PatientsController@destroy', $appointment->id], 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                              {{Form::hidden('id', $appointment->id)}}
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
                                       {{$appointments->links()}}
                               </div>
                           </div>
                               @else
                               <p>No Record Found</p>   
                             @endif
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                       <div class="iq-card-header d-flex justify-content-between">
                          <div class="iq-header-title">
                             <h4 class="card-title">Doctors List</h4>
                          </div>
                       </div>
                       @php
                           $doctors = App\HospitalDoctors::where('h_id', auth()->user()->h_id)->where('role', 'Doctor')->get();

                       @endphp
                        <div class="iq-card-body">
                            @if (count($doctors) > 0)
                          <ul class="doctors-lists m-0 p-0">
                            @foreach ($doctors as $doctor)
                            @php
                                $detail = App\User::where('pin', $doctor->doctor_pin)->first()
                            @endphp
                             <li class="d-flex mb-4 align-items-center">
                                <div class="user-img img-fluid"><img src="img/profile/{{$detail->img}}" alt="doctor image" class="rounded-circle avatar-40"></div>
                                <div class="media-support-info ml-3">
                                   <h6>Dr. {{$detail->name}}</h6>
                                   <p class="mb-0 font-size-12">{{$detail->expertise}}</p>
                                </div>
                                <div class="iq-card-header-toolbar d-flex align-items-center">
                                   <div class="dropdown show">
                                      <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown" aria-expanded="true" role="button">
                                         <i class="ri-more-2-line"></i>
                                      </span>
                                      <div class="dropdown-menu dropdown-menu-right">
                                         <a class="dropdown-item" href="#">
                                           
                                            {!!Form::open(['action' => 'MessagingController@create', 'method' => 'GET', 'style' => 'margin-right:20px;'])!!}
                                            {{Form::hidden('pin', $detail->pin)}}
                                            <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Message Doctor"><i class="ri-message-fill"></i> Message</button>
                                           
                                            {!!Form::close()!!}
                                        </a>
                                      </div>
                                   </div>
                                </div>
                             </li> 
                              
                             @endforeach                             
                          </ul>
                          @else
                          <p>No Record Found</p> 
                          @endif
                          <a href="./doctors" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All Doctors </a>
                       </div>
                    </div>
                 </div>
               
              @endif
              
           </div>
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
                  Copyright 2020 <a href="./">Medicpin</a> All Rights Reserved.
              </div>
           </div>
        </div>
     </footer>
     <!-- Footer END -->
        </div>
     </div>
     
     <!-- Wrapper -->
@endsection

@extends('layouts.main')

@section('content')
@include('inc.navmain')
         <!-- Page Content  -->
         <div>
            <div class="">
               <div class="row">
                  <div class="col-md-12">
                    @if (count($drugs) > 0)
                    
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                         @include('inc.messages')
                           <div class="iq-header-title">
                              <h4 class="card-title">Drug Inventory</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <!----
                           <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 
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
                                 <tr>
                                    <th>Drug Name</th>
                                    <th>Price</th>
                                    <th>Action(s)</th>
                                 </tr>
                             </thead>
                             <tbody>
                               @foreach ($drugs as $drug)
                                 <tr>
                                    <td>
                                       {{$drug->name}} 
                                       @if ($drug->status == 'In Stock')
                                       <span class="pull-right in">{{$drug->status }}</span>
                                       @endif
                                       @if ($drug->status == 'Out Of Stock')
                                       <span class="pull-right out">{{$drug->status }}</span>
                                       @endif
                                    </td>
                                    <td>
                                       ₦{{$drug->price}}/Pack
                                    </td>
                                    <td>
                                       <div class="dropdown">
                                          <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                          <i class="ri-more-fill"></i>
                                          </span>
                                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                                   <a class="dropdown-item">
                                                {!!Form::open(['action' => 'PatientsController@edit_drug', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                {{Form::hidden('id', $drug->id)}}
                                                <button type="submit" class ="btn btn-info btn-sm" title="Edit Drug Details"><i class="fa fa-edit"></i></button>
                                             
                                                {!!Form::close()!!}
                                             </a>
                                          
                                         @if ($drug->status == 'In Stock')
                                          <a class="dropdown-item">
                                                {!!Form::open(['action' => 'PatientsController@status_change', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                {{Form::hidden('id', $drug->id)}}
                                                <button type="submit" class ="btn btn-info btn-sm" title="Mark As Out Of Stock"><i class="fa fa-check-circle"></i></button>
                                             
                                                {!!Form::close()!!}
                                             </a>
                                             @endif
                                          
                                          <a class="dropdown-item">
               
               
                                                   {!!Form::open(['action' => 'PatientsController@destroy_drug', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                   {{Form::hidden('id', $drug->id)}}
                                                   <button type="submit" class ="btn btn-info btn-sm" title="Delete Drug"><i class="fa fa-trash-o"></i></button>
                                                   
                                                   {!!Form::close()!!}
                                                </a>
                                          </div>
                                       </div>
                                         
                                        
                                   </td>
                                     </tr>
                                   
                                     @endforeach           
                             </tbody>
                           </table>
                           ----->
                           <div id="js-product-list">
                              <div class="Products">
                                 <ul class="product_list gridcount grid row">
                                    @foreach ($drugs as $drug)
                                    <li class="product_item col-xs-12 col-sm-6 col-md-6 col-lg-4" style="list-style: none;">
                                       <div class="product-miniature">
                                          <div class="thumbnail-container">
                                             <a href="#"><img src="{{ URL::to('img/drugs/'.$drug->img)}}" alt="product-image" class="img-fluid" /> </a>                                             
                                          </div>
                                          <style>
                                            .product-miniature{
                                               margin-bottom: 20px;
                                               padding: 8px;
                                               height: 400px;
                                               box-shadow: 2px 5px 3px 5px rgba(236, 236, 236, 0.2);

                                            } 
                                            .product-miniature .thumbnail-container a img{
                                               height: 300px;
                                                width: 500px;
                                            }
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
                                                   padding-bottom:200px;
                                                   padding-top: 10px;
                                                }
                             @media only screen and (max-width: 768px) {
                                            .product-miniature{
                                               margin-bottom: 20px;
                                               padding: 8px;
                                               height: 480px;
                                               box-shadow: 2px 5px 3px 5px rgba(236, 236, 236, 0.2);

                                            } 
                                
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
                                                {{$drug->name}} 
                                                @if ($drug->status == 'In Stock')
                                                <span class="pull-right in">{{$drug->status }}</span>
                                                @endif
                                                @if ($drug->status == 'Out Of Stock')
                                                <span class="pull-right out">{{$drug->status }}</span>
                                                @endif
                                             </h4> 
                                             <div class="d-flex flex-wrap justify-content-between align-items-center">
                                                <!---
                                                <div class="product-action">
                                                   <div class="add-to-cart">
                                                      <a href="{{route('cart.add', $drug->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart"> <i class="ri-shopping-cart-2-line"></i> </a>
                                                      
                                                   </div>
                                                </div>-->
                                                <div class="product-price">
                                                   <div class="regular-price"><b>₦{{$drug->price}}/Pack</b></div>
                                                </div>
                                                @php
                                                    $h_id = App\User::where('pin', $drug->doc_pin)->first();
                                                @endphp
                                                @if (auth()->user()->h_id == $h_id->h_id)
                                                <div class="text-center">
                                                <span class="user-list-files d-flex float-right">
                                                {!!Form::open(['action' => 'PatientsController@edit_drug', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                {{Form::hidden('id', $drug->id)}}
                                                <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Edit Drug Details"><i class="fa fa-edit"></i></button>
                                             
                                                {!!Form::close()!!}
                                                {!!Form::open(['action' => 'PatientsController@status_change', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                                {{Form::hidden('id', $drug->id)}}
                                                <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Mark As Out Of Stock"><i class="fa fa-check-circle"></i></button>
                                             
                                                {!!Form::close()!!}
               
               
                                                   {!!Form::open(['action' => 'PatientsController@destroy_drug', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                                   {{Form::hidden('id', $drug->id)}}
                                                   <button type="submit" class ="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" data-original-title="Delete Drug"><i class="fa fa-trash-o"></i></button>
                                                   
                                                   {!!Form::close()!!}
                                                </span>
                                                </div>
                                                   @endif
                                          </div>
                                       </div>
                                    </li>
                                    @endforeach
                                    
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                         <div>
                                 <!-----The pagination link----->
                                 {{$drugs->links()}}
                         </div>
                         @else
                         <p>No Drugs In Stock Yet, Please Check Back Later.</p>    
                         @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
        <footer class="bg-white iq-footer" style="margin-top: 300px;">
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
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
                        <div class="iq-card-body">
                           <div id="js-product-list">
                              <div class="Products">
                                 <ul class="product_list gridcount grid row">
                                    @foreach ($drugs as $drug)
                                    <li class="product_item col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                       <div class="product-miniature">
                                          <div class="thumbnail-container">
                                             <a href="#"><img src="{{ URL::to('img/drugs/'.$drug->img)}}" alt="product-image" class="img-fluid" /> </a>                                             
                                          </div>
                                          <style>
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
                                                   color:#02818f;

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
                                   color: #02818f;
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
                                                <div class="product-action">
                                                   <div class="add-to-cart"><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Cart"> <i class="ri-shopping-cart-2-line"></i> </a></div>
                                                </div>
                                                <div class="product-price">
                                                   <div class="regular-price"><b>₦{{$drug->price}}/Pack</b></div>
                                                </div>
                                          </div>
                                          <div class="text-center">
                                       <span class="user-list-files d-flex float-right">
                                          {!!Form::open(['action' => 'PatientsController@edit_drug', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('id', $drug->id)}}
                                          <button type="submit" class ="btn btn-info btn-sm" title="Edit Drug Details"><i class="fa fa-edit"></i></button>
                                       
                                          {!!Form::close()!!}
                                          {!!Form::open(['action' => 'PatientsController@status_change', 'method' => 'POST', 'style' => 'margin-right:20px;'])!!}
                                          {{Form::hidden('id', $drug->id)}}
                                          <button type="submit" class ="btn btn-info btn-sm" title="Mark As Out Of Stock"><i class="fa fa-check-circle"></i></button>
                                       
                                          {!!Form::close()!!}
         
         
                                             {!!Form::open(['action' => 'PatientsController@destroy_drug', 'method' => 'POST', 'id' => 'my_form_1', 'style' => 'margin-right:20px;'])!!}
                                             {{Form::hidden('id', $drug->id)}}
                                             <button type="submit" class ="btn btn-info btn-sm" title="Delete Drug"><i class="fa fa-trash-o"></i></button>
                                             
                                             {!!Form::close()!!}
                                          </span>
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
                     Copyright 2020 <a href="#">Medicpin</a> All Rights Reserved.
                  </div>
               </div>
            </div>
         </footer>
         <!-- Footer END -->
@endsection
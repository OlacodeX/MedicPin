@extends('layouts.main')

@section('content')
@include('inc.navmain')
        <!-- Wrapper Start -->
        <div class="wrapper" style="border-radius: 50px;">
            <div class="container-fluid p-0" style="border-radius: 50px;">
                <div class="row no-gutters">
                    <div class="col-sm-12 text-center">
                        <div class="iq-error">
                            <h1 style="font-size: 80px;">Unauthorized!!!</h1>
                            <h4 class="mb-0">Oops! You are not allowed to view this page.</h4>
                            <a class="btn btn-primary mt-3" href="./dashboard"><i class="ri-home-4-line"></i>Back to Home</a>
                            <img src="images/error/01.png" class="img-fluid iq-error-img" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wrapper END -->
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
        
@endsection
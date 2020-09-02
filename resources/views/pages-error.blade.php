@extends('layouts.main')

@section('content')
@include('inc.navmain')
        <!-- Wrapper Start -->
        <div class="wrapper">
            <div class="container-fluid p-0">
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
        
@endsection
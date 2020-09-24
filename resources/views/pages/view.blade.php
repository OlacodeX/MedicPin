@extends('layouts.main')

@section('content')
@include('inc.navmain')
    <div>
    <div class="">
    <div class="row">
    <div class="col-sm-12" style="text-align:justify; margin-top:30px;">
      
      <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between">
           <div class="iq-header-title">
              <h4 class="card-title">Your HMO Package </h4>
           </div>
           </div>
        <div class="iq-card-body">
           <div class="table-responsive">
              @php
                  $hmo = App\User::where('id',auth()->user()->hmo)->first();
                  $package = App\HMO::where('id',auth()->user()->hmo_package)->first();
                  $package_cat = App\hmo_cat::where('id',$package->cat_id)->first();
              @endphp
             <table class="table mb-0 table-borderless">
                <thead>
                   <tr>
                      <th scope="col">HMO Name</th>
                      @if (!empty($package_cat))
                      <th scope="col">HMO Product Category</th>
                      @endif
                      <th scope="col">Package Name</th>
                      <th scope="col">Package Value</th>

                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <td>{{$hmo->hmo_org_name}}</td>
                      @if (!empty($package_cat))
                      <td>{{$package_cat->name}}</td>
                      @endif
                      
                      <td>{{$package->name}}</td>
                      <td>{!!$package->description!!}</td>
                   </tr>
                </tbody>
             </table>
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
                    Copyright 2020 <a href="./">Medicpin</a> All Rights Reserved.
                 </div>
              </div>
           </div>
        </footer>
        <!-- Footer END -->
@endsection
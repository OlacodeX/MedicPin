@extends('layouts.main')
@section('page_title')
{{config('app.name')}}
@endsection
@section('content')
@include('inc.homestyle')
<div class="container-fluid main">
    <div class="container">
        <div class="col-sm-8">
            <h1 class="spot">Medicpin EHR SERVICES</h1>
            <p class="text-justify">
                We are not about just being paperless, 
                but built for the cloud. 
                Our platform is about simplifying working with intelligent System that
                 help doctors to work efficiently and enhance Patient care over the cloud.
            </p>
            <p class="btn btn-info">
                Manage appointments, access medical records anytime, anywhere and lots more....
            </p>
            <p class="btn btn-info">
                Migrate from paper records to cloud data management....
            </p>
            <p class="btn btn-info">
               Fast, Secure and Reliable....
            </p>
            <p><a href="{{ route('register') }}" class="btn btn-success btn-lg pull-left">SIGN UP NOW</a><a href="{{ route('login') }}" class="btn btn-success btn-lg pull-right transparent">SIGN IN HERE</a></p>
        </div>
        <div class="col-sm-4">
            <img src="img/cope.png" alt="" class="img-responsive">
        </div>
</div>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
@endsection
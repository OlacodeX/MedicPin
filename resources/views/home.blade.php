@extends('layouts.main')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
      .col-md-12 .card{
        background: #f1f9f9;
          margin-top: 0;
          padding-top: 0;
      }
      .col-md-12{
        background: #f1f1f1;
          margin-top: 0;
          padding-top: 0;
      }
      div.container.main{
          background: #f9f9f9;
          margin-top: 0;
          margin-bottom: 20px;
      }
      p.pull-right {
          float: left;
          text-align: center;
          font-size: 12px;
          color: #b20000;

      }
      p.pull-right span{
          font-size: 30px;
          color: #171919;
          font-family:'poppins';
          font-weight: bold;
      }
      p.pull-left.t{
          background: #0083c9;
          padding: 15px 15px;
          border-radius: 30px;
          color: #f1f1f1;
      }
      p.pull-left.a{
          background: #73cf42;
          padding: 15px 15px;
          border-radius: 30px;
          color: #f1f1f1;
      }
      p.pull-left.e{
          background: #f04d4e;
          padding: 15px 15px;
          border-radius: 30px;
          color: #f1f1f1;
      }
      p.pull-left.p{
          background: #ff9700;
          padding: 15px 15px;
          border-radius: 30px;
          color: #f1f1f1;

      }
      .col-sm-3{
          background: #ffffff;
          padding: 15px 15px;

      }
      .card-header h5{
          padding-top: 15px;
          padding-bottom: 15px;
          padding-left: 20px;
          color: #ff9700;

      }
      td img{
          width: 50px;
          height: 50px;
      }
.page-item.active .page-link {
z-index: 1;
color: #fff;
background-color: #b20000;
border-color: #b20000;
}
.page-item .page-link {
color: #b20000;
}
  
#main {
  transition: margin-left .5s;
  padding: 16px;
}
@media only screen and (max-width: 768px) {
      .col-sm-3{
          background: #ffffff;
          padding: 15px 15px;
            margin-top: 100px;
      }
      .card-header h5{
          padding-top: 15px;
          padding-bottom: 15px;
          padding-left: 20px;
          color: #b20000;

      }
      .card-body{
          margin-top: 50px;

      }
      p.pull-left{
          float: none;
          margin-left: 30px;
      }
      p.pull-right {
          float: none;
          text-align: center;
          font-size: 12px;
          color: #b20000;

      }
      .col-md-12 .card{
        background: transparent;
          margin-top: 0;
          padding-top: 0;
      }
      .col-md-12{
        background: transparent;
          margin-top: 0;
          padding-top: 0;
      }
      div.container.main{
          background: transparent;
          margin-top: 0;
      }
}

</style>
@section('content')
@include('inc.navd')
  <!-- Page Content -->
  <div class="" id="main" style="margin-left:250px">
  
    <div class="w3-container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-justify">
                    <h5>You are logged in as <strong>{{ Auth::user()->name }}</strong> </h5>
                </div>
                @include('inc.messages')
                <div class="card-body">

                </div>
            </div>

    </div>
  </div>
  

@endsection

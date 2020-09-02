@extends('layouts.main')
<style>
    div.col-sm-6.one{
                background:linear-gradient(rgba(11, 15, 236, 0.781),rgba(10, 10, 190, 0.76)), url('../../img/yy.jpg') no-repeat;
                background-size: cover;
                background-position: top;
                color: #ffa500;
                height: 100%;
               padding-bottom: 500px;
                margin: 0;

    }
    div.jumbotron{
        margin-top: 200px;
        background: transparent;
    }
    div.col-sm-6{
                color: #ffa500;
                height: 500px;
                height: 100%;
    }
    div.col-sm-6 div.card{
        width: 80%;
        padding-left: 20px;
        padding-top: 60px;
    }
    /*----------------------------------------------
Input
------------------------------------------------*/
div.col-sm-6 div.card input.form-control { height: 45px; line-height: 45px; background: #e9edf4; border: 0px solid #d7dbda; font-size: 14px; color: #777D74; }
div.col-sm-6 div.card input.form-control:focus { color: #374948; background-color: #e5f2ff; box-shadow: none; }
 
    /* style glyph */
    div.inner-addon .fa {
      position: absolute;
      padding: 10px;
      pointer-events: none;
      color: #ffa500;
      font-weight: 100;
      margin-top: 5px;
    }
    div.col-sm-6 div.card form{
        padding-left: 12px;
    }
    h2.title{
        font-weight: bold;
        line-height: 2em;
        
    }
    button.btn.btn-info{
    background: #eee1e1;
    padding: 10px 30px;
    margin-bottom: 10px;
    color: #ffa500;
    border-color: #ffa500;
    font-weight: bold;

}
a.btn.btn-link{
    text-decoration: none;
    color: #ffa500;
}
div.form-check input.form-check-input{
    color: #ffa500;
    background: #ffa500;
}

a.btn.btn-success{
    background: #ffa500;
    border-radius: 0;
    border-color: #ffa500;
    margin-top: 20px;
    font-weight: bold;
}
a.btn.btn-success:hover{
    background: transparent;
    border-radius: 0;
    color: #ffa500;
}
a.btn.btn-success.pull-left{
    margin-left: 180px;

}
a.btn.btn-success.pull-right.transparent{
    margin-right: 120px;
    background: transparent;
    border-color: #ffa500;
    color: #ffa500;
    font-weight: bold;

}
a.btn.btn-success.pull-right.transparent:hover{
    background:#ffa500;
    border-color: #ffa500;
    color: #fff;

}
@media only screen and (max-width: 768px) {

    div.col-sm-6.one{
                background:linear-gradient(rgba(11, 15, 236, 0.781),rgba(10, 10, 190, 0.76)), url('../img/yy.jpg') no-repeat;
                background-size: cover;
                background-position: top;
                color: #ffa500;
                height:80%;
               padding-bottom: 160px;
                margin: 0;
                padding-top: 0;

    }
    div.jumbotron{
        margin-top: 0px;
        padding-top: 100px;
        background: transparent;
    }
a.btn.btn-success.pull-left{
    margin-left: 50px;

}
a.btn.btn-success.pull-right.transparent{
    margin-right: 69px;
    background: transparent;
    border-color: #ffa500;
    color: #ffa500;
    font-weight: bold;

}
p.text-center{
    font-size: 13px;
    }
    div.col-sm-6{
                color: #ffa500;
                height: 50%;
    }
    }
</style>
@section('content')
<div class="">
    <div class="">
        <div class="col-sm-6 one">
            <div class="jumbotron">
            <p class="text-center">
                Hi there, <br>
               Let's get your account back up and running......
            </p>
            <p><a href="{{ route('register') }}" class="btn btn-success btn-lg pull-left">SIGN UP HERE</a><a href="{{ route('login') }}" class="btn btn-success btn-lg pull-right transparent">SIGN IN HERE</a></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header">
                    
                    <h2 class="title">
                        Reset Password
                    </h2>
                    <p>Set a new password for your account.</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            </div>
                        </div>

                        <div class="form-group row">
                            </div>
                        </div>

                        <div class="form-group row">
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</div>
@endsection
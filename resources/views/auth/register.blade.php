@extends('layouts.main')
<style>
    div.col-sm-6.one{
                background:linear-gradient(rgba(11, 15, 236, 0.781),rgba(10, 10, 190, 0.76)), url('img/yy.jpg') no-repeat;
                background-size: cover;
                background-position: top;
                color: #ffa500;
                height: 100%;
               padding-bottom: 800px;
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
    div.col-sm-6 div.card input.form-control{
        background: rgb(241, 239, 239);
        padding: 25px 15px;
        margin-bottom: 10px;
        margin-top: 10px;
        border-radius: 0;
        border: none;
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
    margin-right: 100px;
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
                background:linear-gradient(rgba(11, 15, 236, 0.781),rgba(10, 10, 190, 0.76)), url('img/yy.jpg') no-repeat;
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
                It is nice having you here..... <br>
                To enjoy our services, kindly create an account with us...
            </p>
            <p><a href="{{ route('login') }}" class="btn btn-success btn-lg pull-left">SIGN IN HERE</a><a href="./" class="btn btn-success btn-lg pull-right transparent">GO TO HOMEPAGE</a></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-justify">
                    <h2 class="title">
                        Sign Up
                    </h2>
                    <p>Enter your details and let's get you an account.</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection

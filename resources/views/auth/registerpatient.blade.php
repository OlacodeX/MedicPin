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
        text-align: center;
    }
    div.jumbotron img{
        width: 100px;
        height: 100px;
        margin-left: 300px;
        margin-top: 50px;
        transform: rotate(-20deg);
        box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2);
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
h1.spot a:hover{
    text-decoration: none;
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
p.pull-right a{
    background:rgba(241, 237, 237, 0.726);
    padding: 8px 5px;
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
    div.jumbotron img{
        width: 100px;
        height: 100px;
        margin-left: 250px;
        margin-top: 50px;
        transform: rotate(-20deg);
        box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2);
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
        <div class="col-sm-6 one text-center">
            <div class="jumbotron text-center">
                <h1 class="spot"><a href="./" style="text-decoration: none;color: #ffa500;">Medicpin</a></h1>
                <img src="img/cope.png" alt="" class="img-responsive">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header text-justify">
                    <h2 class="title">
                       Complete Account Set Up
                    </h2>
                    <p>Remeber to use the email address that you got this link from.</p>
                </div>
                <div class="card-body">
                    {!! Form::open(['action' => 'PatientsController@reg_patient', 'method' => 'POST']) /** The action should be the block of code in the store function in PostsController
                    **/ !!}
                        @csrf
                        @include('inc.messages')
                        <input type="hidden" name="role" value="Patient">
                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="inner-addon right-addon">
                                <i class="fa fa-user"></i>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your full name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-form-label text-md-right">{{ __('Username') }}</label>
                            <div class="inner-addon right-addon">
                                <i class="fa fa-users"></i>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Your unique username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="inner-addon right-addon">
                                <i class="fa fa-envelope"></i>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="inner-addon right-addon">
                                <i class="fa fa-expeditedssl"></i>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="inner-addon right-addon">
                                <i class="fa fa-expeditedssl"></i>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="form-check pull-left">
                                <input class="form-check-input" type="checkbox" name="Terms and Conditions" id="Terms and Conditions" {{ old('Terms and Conditions') ? 'checked' : '' }}>

                                <label class="form-check-label" for="Terms and Conditions">
                                   <p> I accept <a href="">Terms and Conditions</a> </p>
                                </label>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-info pull-right">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <hr>
                        <p class="pull-left">Already Have Account ? <a href="{{ route('login') }}"> Sign In</a></p>
                        
    
                        <p class="pull-right">
                            <a style="color:#ffa500;" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/" style="color:#ffa500;"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.facebook.com/" style="color:#ffa500;"><i class="fa fa-facebook"></i></a>
                        </p>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
</div>
@endsection

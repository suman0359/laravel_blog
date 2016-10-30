@extends('layouts.master')

@section('content')
<div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"> Sign In to <strong>Moltran</strong> </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" role="form" method="POST" action="{{ url('/login') }}">  
                {{ csrf_field() }}  

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-xs-12">
                            
                            <input id="email" type="email" class="form-control input-lg" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error ' : ''}} ">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" type="password" id="password" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    Remember me
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            <a href="{{ url('/password/reset') }}"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="{{ url('/register') }}">Create an account</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>
@endsection

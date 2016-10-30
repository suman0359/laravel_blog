@extends('layouts.master')

@section('content')

    <div class="wrapper-page">
        <div class="panel panel-color panel-primary panel-pages">
            <div class="panel-heading bg-img">
                <div class="bg-overlay"></div>
                <h3 class="text-center m-t-10 text-white"> Create a new Account </h3>
            </div>


            <div class="panel-body">
                <form class="form-horizontal m-t-20" action="{{ url('/register')}}" role="form" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                        <div class="col-xs-12">
                            <input name="name" id="name" class="form-control input-lg" type="text" required
                                   placeholder="Name" value="{{ old('name') }}">
                            @if($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                        <div class="col-xs-12">
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                   class="form-control input-lg" placeholder="Email">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control input-lg" id="password" name="password" type="password"
                                   required="" value="{{ old('password') }}" placeholder="Password">
                            @if($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" id="password-confirm" class="form-control input-lg" name="password_confirmation" placeholder="Confirm Password" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox" checked="checked">
                                <label for="checkbox-signup">
                                    I accept <a href="register.html#">Terms and Conditions</a>
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-primary waves-effect waves-light btn-lg w-lg" type="submit">
                                Register
                            </button>
                        </div>
                    </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-12 text-center">
                            <a href="login.html">Already have account?</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

@endsection

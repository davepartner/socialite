@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>



                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>

                   

                    </form>



                    <div class="form-group row mb-0" style="margin-top: 10px;" >
                            <div class="col-md-8 offset-md-4">
                              <a  href="/login/facebook" class="btn  btn-primary" >
                                <i class="fab fa-facebook-f"></i> Sign in with Facebook</a>
                          
                            </div>
                        </div>



                    <div class="form-group row mb-0" style="margin-top: 10px;" >
                            <div class="col-md-8 offset-md-4">
                            <a  href="/login/twitter" class="btn  btn-primary" >
                            <i class="fab fa-twitter"></i> Sign in with Twitter</a>
                          
                            </div>
                        </div>


                        <div class="form-group row mb-0" style="margin-top: 10px;" >
                            <div class="col-md-8 offset-md-4">
                            <a  href="/login/github" class="btn  btn-primary" >
                            <i class="fab fa-github"></i> Sign in with Github</a>
                          
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="margin-top: 10px;" >
                            <div class="col-md-8 offset-md-4">
                            <a  href="/login/linkedin" class="btn  btn-primary" >
                            <i class="fab fa-linkedin"></i> Sign in with Linkedin</a>
                        
                            </div>
                        </div>


                        <div class="form-group row mb-0" style="margin-top: 10px;" >
                            <div class="col-md-8 offset-md-4">
                            <a  href="/login/google" class="btn  btn-primary" >
                            <i class="fab fa-google"></i> Sign in with Google</a>
                        
                            </div>
                        </div>


                        

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

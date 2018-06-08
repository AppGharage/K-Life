    @extends('layouts.app')
        @section('stylesheet')
            <link rel="stylesheet" href="{{asset('css/admin-login.css')}}">
        @endsection
        @section('content') 
        <br> <br>
            <div class="row justify-content-center">
                <div class="col-md-6">
            
                        <div class="card-header login-head">Welcome Back! <br> Please {{ __('Login') }} to your account</div>
                        <br>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                    <br>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="alice@gmail.com" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="font-weight-light text-danger">
                                                {{ $errors->first('email') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                    <br>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="********" required>

                                        @if ($errors->has('password'))
                                            <span class="font-weight-light text-danger">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="the-button">
                                            {{ __('Login') }}
                                        </button>

                                        <a class="btn btn-link forgot" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
</div>
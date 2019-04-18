@extends('layouts.app')

@section('content')
        <!-- ============================================================== -->
        <!-- signup form  -->
        <!-- ============================================================== -->
        <form class="splash-container"  method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                    <p>Please enter your user information.</p>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  type="text" id="name" required="" placeholder="Name" autocomplete="off" required autofocus>
                        
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" type="email" id="email" placeholder="E-mail" autocomplete="off" required >
                        
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" type="password"  name="password" placeholder="Password" required>
                        
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm" required>
                    </div>

                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                    </div>

                    {{-- ======For Future Use====== --}}
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>
                    <div class="form-group row pt-0">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                            <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white">
                    <p>Already member? <a href="#" class="text-secondary">Login Here.</a></p>
                </div>
            </div>
        </form>
@endsection

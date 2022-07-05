
@include('admin.template.header')


<div id="container" class="cls-container">
    <!-- REGISTRATION FORM -->
    <!--===================================================-->
    <div class="lock-wrapper">
        <div class="panel lock-box">
            <div class="center"> <img alt="" src="img/user.png" class="img-circle"/> </div>
            <h4> Hello User !</h4>
            <p class="text-center">Please login to Access your Account</p>
            <div class="row">
                <form id="registration" class="form-inline" method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div id="demo-error-container"></div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left">
                            <label for="name" class="control-label">{{ __('Name') }}</label>
                         
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>
                            @error('name')
                            <span class="invalid-feedback text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left">
                            <label for="email" class="control-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"><br>

                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left">
                            <label for="password" class="control-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><br>

                                @error('password')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left">
                            <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left pad-btm">
                            <label for="checkboxtickmark" class="form-checkbox form-icon control-label">
                            <input id="checkboxtickmark" type="checkbox" name="agree" value="agree" >
                            Agree with the terms and conditions 
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">
                        {{ __('Register') }}
                    </button>
                </form>
            </div>
        </div>
        <div class="registration"> Already registered! <a href="#"> <span class="text-primary"> Please Login Here </span> </a> </div>
    </div>
    <!--===================================================-->
    <!-- REGISTRATION FORM -->
</div>

@include('admin.template.footer')
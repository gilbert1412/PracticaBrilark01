
@include('admin.template.header')



<div class="lock-wrapper">
    <a href="register"> <b>Registrarce</b>  </a>
    <div class="form-group">
       
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="lock-box">
               
                <div class="main">
                    <h3>Please Log In, or <a href="#">Sign Up</a></h3>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
                        </div>
                    </div>
                    <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or">or</span>
                    </div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                           
                           
                        </div>
                        <div class="form-group">
                          
                            
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

                        </div>
                        <div class="pull-left pad-btm">
                            <div class="checkbox">
                                <label class="form-checkbox form-icon form-text">
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                            
                        </div>
                       
                        <button type="submit" class="btn btn btn-primary pull-right">
                            {{ __('Login') }}
                        </button><br>

                        
                      
                    </form>
                    
                </div>
               
            </div>
            
        </div>
        
    </div>
</div>
@include('admin.template.footer')
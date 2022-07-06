
@include('admin.template.header')



<div class="lock-wrapper">
    <a href="{{ route('register') }}"> <b>Registrarce</b>  </a>
   
    <div class="form-group">
       
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="lock-box">
               
                <div class="main">
                    <h3>Ingresar Credenciales</a></h3>
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
                            <label for="email" class="control-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <br>
                            @error('email')
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                           
                           
                        </div>
                        <div class="form-group">
                          
                            
                            <label for="password" class="control-label">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <br>
                                @error('password')
                                    <span class="invalid-feedback text-danger" role="alert">
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
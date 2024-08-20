@extends('layouts.app')

@section('content')

<main>
    <section class="vh-100"  style="background-color: rgba(155, 255, 93, 0.966);">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                          
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form method="POST"  action="{{ route('login') }}">
                      @csrf

                        <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fa fa-sign-in fa-2x me-3"  style="color: #ff6219;" aria-hidden="true"></i>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">به اکانت خود وارد شوید</h5>
      
                        <div class="form-outline mb-4">
                          <label class="form-label form-control-lg" for="email">{{ __('Email Address') }}</label>

                          <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                        
                    
                        <div class="form-outline mb-4">
                          
                          <label class="form-label form-control-lg" for="password">{{ __('Password') }}</label>

                          <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-warning btn-lg btn-block" type="submit">{{ __('Login') }}</button>
                        </div>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" data-toggle="modal" data-target="exampleModal" style="color: #393f81;">{{ __('رمز خود را فراموش کردید؟') }}</a>
                        @endif

                        @if (Route::has('register'))  
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">آیا از قبل اکانت داری؟ <a href="{{ route('register') }}"
                            style="color: #393f81;">ثبت نام</a></p>
                      </form>
                      @endif
                    </div>
                  </div>
               
              </div>
            </div>
          </div>
        </div>
      </section>



 </main>
@endsection

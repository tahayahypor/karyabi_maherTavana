@extends('layouts.app')

@section('content')

<main>
                    <section class="vh-200"  style="background-color: rgba(155, 255, 93, 0.966)">
                        <div class="container h-100">
                          <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-12 col-xl-11">
                              <div class="card text-black"style="border-radius: 25px;">
                                <div class="card-body p-md-5">
                                  <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                      
                                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">ثبت نام</p>
                      
                                      <form class="mx-1 mx-md-4" method="POST" action="{{ route('register') }}">
                                        @csrf
                      
                                        <div class="d-flex flex-row align-items-center mb-4">
                                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                          <div class="form-outline flex-fill mb-0">
                                            <label class="col-md-4 col-form-label text-md-end" for="name">{{ __('نام و نام خانوادگی') }}</label>
                                          </div>
                                          <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        </div>

                                        
                                    
                                        <div class="d-flex flex-row align-items-center mb-4">
                                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                          <div class="form-outline flex-fill mb-0">
                                
                                            <label class="col-md-4 col-form-label text-md-end" for="email">{{ __('آدرس ایمیل') }}</label>
                                          </div>
                                          <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                        
                        
                      
                                        <div class="d-flex flex-row align-items-center mb-4">
                                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                          <div class="form-outline flex-fill mb-0">
                                        
                                            <label class="col-md-4 col-form-label text-md-end" for="password">{{ __('رمز') }}</label>
                                          </div>
                                         <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                      
                                        <div class="d-flex flex-row align-items-center mb-4">
                                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                          <div class="form-outline flex-fill mb-0">

                                            <label class="col-md-4 col-form-label text-md-end" for="form3Example4cd">{{ __('تکرار رمز ') }}</label>
                                          </div>
                                          <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                            
                            
                                        <!-- <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                          <a class="btn btn-warning" role="button">{{ __('ثبت نام') }}</a>
                                        </div>
                         -->

                         
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('ثبت نام') }}
                                </button>
                            </div>
                        </div>  
                                      </form>
                      
                                    </div>
                                  
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                     </section>
    </main>
@endsection

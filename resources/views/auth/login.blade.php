@extends('layouts.home')
<div class="container">
   <!-- Outer Row -->
   <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
         <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
               <!-- Nested Row within Card Body -->
               <div class="row">
                  <div class="col-lg-6 d-none d-lg-block bg-login-image">
                  </div>
                  <div class="col-lg-6">
                     <div class="p-5">
                        <div class="text-center">
                          <img src="{{ asset('img/logo.jpg') }}" alt="300"  width="300">
                          <hr>
                           <h1 class="h4 text-gray-900 mb-4">Bienvenido de nuevo</h1>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                           <input id="email" type="email" class="form-control @error('email') is-invalid @enderror form-control-user" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="[USUARIO]" autofocus>
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror form-control-user" name="password" required autocomplete="current-password" placeholder="[PASSWORD]">
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <div class="custom-control custom-checkbox small">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                              <label class="form-check-label" for="remember">
                              {{ __('Remember Me') }}
                              </label>
                           </div>
                        </div>
                        <div class="form-group row mb-0">
                           <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary btn-user btn-block">
                              {{ __('Login') }}
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

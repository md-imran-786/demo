@extends('dashboard.layouts.simple')

@section('content')


 <div id="page-container" class="main-content-boxed">
   <main id="main-container">
      <div class="bg-body-dark bg-pattern" style="background-image: url('/media/various/bg-pattern-inverse.png');">
         <div class="row mx-0 justify-content-center">
            <div class="hero-static col-lg-6 col-xl-4">
               <div class="content content-full overflow-hidden">
                  <div class="py-30 text-center">
                     <p class="font-size-h3 font-w600 text-black">
                        Accounts System | DPI
                    </p>
{{--                     <h4 class="mt-3 mb-10"> Accounts System | DPI</h4>--}}
{{--                     <h2 class="h5 font-w400 text-muted mb-0">It’s a great day today!</h2>--}}
                  </div>

                  <form class="js-validation-signin" action="{{ route('login') }}" method="post">
                  @csrf
                     <div class="block block-themed block-rounded block-shadow">
                        <div class="block-header bg-gd-dusk">
                           <h3 class="block-title">Please Sign In</h3>
                           <div class="block-options">
                              <button type="button" class="btn-block-option">
                                 <i class="si si-wrench"></i>
                              </button>
                           </div>
                        </div>
                        <div class="block-content">
                           <div class="form-group row">
                              <div class="col-12">
                                 <label for="email">{{ __('E-Mail Address') }}</label>
                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-12">
                                 <label for="password">{{ __('Password') }}</label>
                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                 @enderror
                              </div>
                           </div>

                           <div class="form-group row mb-0">
                              <div class="col-sm-6 d-sm-flex align-items-center push">
                                 <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ?'checked' : '' }}>

                                    <label class="form-check-label " for="remember">
                                       {{ __('Remember Me') }}
                                    </label>
                                 </div>
                              </div>
                              <div class="col-sm-6 text-sm-right push">
                                 <button type="submit" class="btn btn-alt-primary">
                                    {{ __('Login') }}
                                 </button>
                              </div>
                           </div>
                        </div>
{{--                        <div class="block-content bg-body-light">--}}
{{--                           <div class="form-group text-center">--}}
{{--                              <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="#">--}}
{{--                                 <i class="fa fa-plus mr-5"></i> Create Account--}}
{{--                              </a>--}}
{{--                              @if (Route::has('password.request'))--}}
{{--                                 <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                    {{ __('Forgot Your Password?') }}--}}
{{--                                 </a>--}}
{{--                              @endif--}}
{{--                           </div>--}}
{{--                        </div>--}}
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </main>
</div>


@endsection

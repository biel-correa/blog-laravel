@extends('layouts.app')

@section('content')
    {{--<div class="container">
                <div class="card bg-base-100">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>--}}

    <div class="container">
        <div class="row justify-center">
            <div class="card">
                <form class="card-body text-center items-center" method="POST" action="{{ route('login') }}">
                    @csrf

                    <h2 class="card-title mb-3">
                        {{ __('Login') }}
                    </h2>

                    <input type="email" name="email" placeholder="{{ __('Email') }}"
                           class="input input-bordered w-full max-w-xs @error('email') input-error @enderror"
                           value="{{ old('email') }}" required autocomplete="email" autofocus/>

                    @error('email')
                    <span class="text-neutral-700" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password" type="password" placeholder="{{ __('Password') }}"
                           class="input input-bordered w-full max-w-xs @error('password') input-error @enderror"
                           name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="text-neutral-700" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="form-control">
                        <label class="label cursor-pointer">
                            <span class="label-text mr-2">{{ __('Remember Me') }}</span>
                            <input type="checkbox" name="remember" id="remember"
                                   class="checkbox checkbox-md" {{ old('remember') ? 'checked' : '' }}/>
                        </label>
                    </div>

                    <div class="card-actions flex-column items-center">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

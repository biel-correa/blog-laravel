@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-center">
            <div class="card">
                <form action="" class="card-body text-center items-center" method="POST" action="{{ route('register') }}">
                    @csrf

                    <h2 class="card-title mb-3">
                        {{ __('Register') }}
                    </h2>

                    <input type="text" name="name" placeholder="{{ __('Name') }}"
                           class="input input-bordered w-full max-w-xs @error('name') input-error @enderror"
                           value="{{ old('name') }}" required autocomplete="name" autofocus/>

                    @error('name')
                        <span class="text-neutral-700" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="email" name="email" placeholder="{{ __('Email') }}"
                           class="input input-bordered w-full max-w-xs @error('email') input-error @enderror"
                           value="{{ old('email') }}" required autocomplete="email"/>

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

                    <input id="password-confirm" type="password" placeholder="{{ __('Confirm Password') }}"
                           class="input input-bordered w-full max-w-xs @error('password') input-error @enderror"
                           name="password_confirmation" required autocomplete="new-password">

                    @error('password')
                        <span class="text-neutral-700" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="card-actions">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

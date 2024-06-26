@extends('layouts.app')

@section('content')
    @component('components.full-page-section')
        @component('components.card')
            @slot('title')
                {{ __('Register') }}
            @endslot

            <form method="POST" action="reg_new_user">
                @csrf

                <div class="field">
                    <label class="label" for="name">{{ __('Name') }}</label>
                    <div class="control">
                        <input id="name" type="text" class="input @error('name') is-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>

                    @error('name')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="familyName">{{ __('Last Name') }}</label>
                    <div class="control">
                        <input id="familyName" type="text" class="input @error('familyName') is-danger @enderror" name="familyName" value="{{ old('familyName') }}" required autocomplete="familyName" autofocus>
                    </div>

                    @error('familyName')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="institution">{{ __('Institution') }}</label>
                    <div class="control">
                        <input id="institution" type="text" class="input @error('institution') is-danger @enderror" name="institution" value="{{ old('institution') }}" required autocomplete="institution" autofocus placeholder="e.g., University of Geneva">
                    </div>

                    @error('institution')
                        <p class="help is-danger" role="alert">
                            {{ $institution }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="email">{{ __('E-Mail Address') }}</label>
                    <div class="control">
                        <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email">
                    </div>
                    @error('email')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="password">{{ __('Password') }}</label>
                    <div class="control">
                        <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="new-password">
                    </div>

                    @error('password')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="password-confirm">{{ __('Confirm Password') }}</label>
                    <div class="control">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <hr>

                <div class="field is-form-action-buttons">
                    <button type="submit" class="button is-primary">
                        {{ __('Register') }}
                    </button>

                </div>
            </form>

        @endcomponent
    @endcomponent

@endsection

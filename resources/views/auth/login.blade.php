{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<x-guest-layout>
    <div class="flex w-50 mx-auto">
        <div style="color: #f00; font-weight:bold;">
            <x-jet-validation-errors class="mb-4" />
        </div>
        <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control mb-2" placeholder="Email address"
                required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                required="" autocomplete="current-password">
            <div class="checkbox mb-2 mt-2">
                <label>
                    <input name="remember" type="checkbox" value="forever"> Remember me
                </label>
            </div>
            <a class="btn btn-outline-primary mb-3" href="{{ route('password.request') }}">Forget Password
                ?</a>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>
</x-guest-layout>

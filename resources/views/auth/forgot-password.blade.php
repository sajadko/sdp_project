{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}


<x-guest-layout>
    <div class="flex w-50 mx-auto">
        <h3 class="mb-3">Forgot Password</h3>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div style="color: #f00; font-weight:bold;">
            <x-jet-validation-errors class="mb-4" />
        </div>
        <form class="form-signin" method="POST" action="{{ route('password.email') }}">
            @csrf
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control mb-2" placeholder="Email address"
                required="" autofocus="">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Email the Password reset link</button>
        </form>
    </div>
</x-guest-layout>

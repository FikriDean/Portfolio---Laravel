<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11 px-4">
            <x-navbar></x-navbar>
        </div>
    </div>
</div>

<x-guest-layout>
    <x-auth-card>
        <div class="mb-4 text-sm text-dark">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="w-100 d-flex justify-content-start mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11 px-4">
            <x-footer></x-footer>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11 px-4">
            <x-navbar></x-navbar>
        </div>
    </div>
</div>

<x-guest-layout>
    <x-auth-card>
        
        <h1 class="h3 mb-4 fw-normal text-center text-dark" data-aos="fade-down" data-aos-delay="1100">Please log in</h1>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div data-aos="fade-down" data-aos-delay="1300">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4" data-aos="fade-down" data-aos-delay="1400">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4" data-aos="fade-down" data-aos-delay="1500">
                <label for="remember_me" class="inline-flex items-center text-dark">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600 text-dark">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="d-flex justify-content-between mt-4" data-aos="fade-down" data-aos-delay="1600">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-dark hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div class="d-flex justify-content-center mt-4" data-aos="fade-down" data-aos-delay="1700">
                <a class="underline text-sm text-dark hover:text-gray-900" href="/">
                    Go to Home Page
                </a>
                
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
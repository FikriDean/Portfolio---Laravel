<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11 px-4">
            <x-navbar></x-navbar>
        </div>
    </div>
</div>

<x-guest-layout>
    <x-auth-card>
        
        <h1 class="h3 my-4 fw-normal text-center text-dark" data-aos="fade-down" data-aos-delay="1100">Please sign up</h1>

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div data-aos="fade-down" data-aos-delay="1300">
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Username -->
            <div class="mt-4" data-aos="fade-down" data-aos-delay="1400">
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4" data-aos="fade-down" data-aos-delay="1500">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4" data-aos="fade-down" data-aos-delay="1600">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4" data-aos="fade-down" data-aos-delay="1700">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-content-between mt-4" data-aos="fade-down" data-aos-delay="1800">
                <a class="underline text-sm text-dark" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
                
            </div>

            <div class="d-flex justify-content-center mt-4" data-aos="fade-down" data-aos-delay="1900">
                <a class="underline text-sm text-dark" href="/">
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
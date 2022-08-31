<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11 px-4">
            <x-navbar></x-navbar>
        </div>
    </div>
</div>

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-dark" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-dark">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 d-flex align-items-center justify-content-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <a class="underline text-sm text-dark hover:text-gray-900" href="/">
                Go to Home Page
            </a>

        </div>
    </x-auth-card>
</x-guest-layout>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-11 px-4">
            <x-footer></x-footer>
        </div>
    </div>
</div>
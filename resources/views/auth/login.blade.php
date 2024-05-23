<x-guest-layout>
    <div>
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="password" :value="__('Wachtwoord')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-gray-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-900">{{ __('Wachtwoord onthouden') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-4">
                <div>
                    <a class="underline text-sm text-gray-900 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Wachtwoord vergeten?') }}
                    </a>
                </div>

                <x-primary-button>
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    <div class="relative flex py-3 items-center">
        <div class="flex-grow border-t border-gray-300"></div>
        <span class="flex-shrink mx-4 text-xs text-gray-300">OF</span>
        <div class="flex-grow border-t border-gray-300"></div>
    </div>
    <div class="flex justify-center gap-2">
        <div class="text-center pb-2 text-xs text-gray-400">
            Nog geen account?
            <a class="underline hover:text-gray-600" href="{{ route('register') }}">
                {{ __('Registreer nu') }}
            </a>
        </div>
    </div>
</x-guest-layout>

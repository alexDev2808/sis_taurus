<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¿Olvidaste tu contraseña? Escribe el correo con el que te registraste y enviaremos un enlace para crear una nueva contraseña') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" novalidate>
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Correo')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between my-4">
            <x-link :href="route('login')">
                ¿Ya tienes cuenta?
            </x-link>

            <x-link :href="route('register')">
                Crear cuenta
            </x-link>


        </div>

        <div class="flex items-end justify-end mt-4">
            <x-primary-button>
                {{ __('Enviar instrucciones') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

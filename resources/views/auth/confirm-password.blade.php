@extends('layouts.app', ['class' => 'bg-default'])
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <center><img src="{{ asset('argon') }}/img/brand/logo2.png" width="80%" height="90%" /></center>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Esta es un área segura de la aplicación. Por favor confirme su contraseña antes de continuar.') }}
        </div>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex justify-end mt-4">
                <x-primary-button>
                    {{ __('Confirmar') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

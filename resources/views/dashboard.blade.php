<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        {{ __("You're logged in!") }}
    </div>
</x-app-layout>
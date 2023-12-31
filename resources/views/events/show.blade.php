<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <img src="https://picsum.photos/1600/400"/>
                <div class="p-6">

                    <x-header title="{{ $event->name }}" separator/>

                    <x-button onclick="Livewire.dispatch('openModal', { component: 'create-event-ticket-form', arguments: { eventId: {{ $event->id }} }})">购票</x-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

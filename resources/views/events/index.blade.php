<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-6">
                @foreach($events as $event)
                    <x-card title="{{ $event->name }}">
                        {{ $event->description }}
                        <x-slot:figure>
                            <img src="https://picsum.photos/500/200"/>
                        </x-slot:figure>
                        <x-slot:actions>
                            <a href="{{ route('events.show', $event) }}">
                                <x-button label="报名" class="btn-primary" />
                            </a>
                        </x-slot:actions>
                    </x-card>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

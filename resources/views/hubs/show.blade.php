<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hubs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-6">
                @foreach($hub->events as $event)
                    <x-card>
                        <x-slot:figure>
                            <a href="{{ route('events.show', $event) }}">
                                <img src="https://picsum.photos/900/500?{{ Str::random(8) }}"/>
                            </a>
                        </x-slot:figure>

                        <x-slot:title>
                            <a href="{{ route('events.show', $event) }}">{{ $event->name }}</a>
                        </x-slot:title>

                        <x-slot:subtitle>
                            <p>时间：{{ app('ranger')->format($event->start_time, $event->end_time) }}</p>
                        </x-slot:subtitle>
                    </x-card>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

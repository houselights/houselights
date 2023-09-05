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
                    <x-card>
                        <x-slot:title>
                            <a href="{{ route('events.show', $event) }}">{{ $event->name }}</a>
                        </x-slot:title>
                        {{ $event->description }}
                        <x-slot:figure>
                            <a href="{{ route('events.show', $event) }}">
                                <img src="https://picsum.photos/900/500?{{ Str::random(8) }}"/>
                            </a>
                        </x-slot:figure>
                        <x-slot:actions>
                        </x-slot:actions>
                    </x-card>
                @endforeach
            </div>

            <div class="pt-5">
                {{ $events->links() }}
            </div>
        </div>
    </div>
</x-app-layout>

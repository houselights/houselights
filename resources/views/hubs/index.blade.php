<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hubs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-6">
                @foreach($hubs as $hub)
                    <x-card>
                        <x-slot:figure>
                            <a href="{{ route('hubs.show', $hub) }}">
                                <img src="https://picsum.photos/900/500?{{ Str::random(8) }}"/>
                            </a>
                        </x-slot:figure>

                        <x-slot:title>
                            <a href="{{ route('hubs.show', $hub) }}">{{ $hub->name }}</a>
                        </x-slot:title>
                    </x-card>
                @endforeach
            </div>

            {{ $hubs->links() }}
        </div>
    </div>
</x-app-layout>

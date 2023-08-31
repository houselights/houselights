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
                    <x-card title="{{ $hub->name }}">
                        {{ $hub->description }}
                        <x-slot:figure>
                            <img src="https://picsum.photos/900/500?{{ Str::random(8) }}"/>
                        </x-slot:figure>
                        <x-slot:actions>
                            <a href="{{ route('hubs.show', $hub) }}">
                                <x-button label="查看" class="btn-primary" />
                            </a>
                        </x-slot:actions>
                    </x-card>
                @endforeach
            </div>

            {{ $hubs->links() }}
        </div>
    </div>
</x-app-layout>

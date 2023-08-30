<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('活动列表') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <img src="https://picsum.photos/1600/400"/>
                <div class="p-6">

                    <x-header title="{{ $event->name }}" subtitle="{{ $event->description }}" separator/>

                    <x-form method="post" action="{{ route('events.tickets.store', $event) }}">
                        {{ csrf_field() }}

                        <div>
                            <div class="font-bold">会议</div>
                            @foreach($event->sessions as $session)
                                <p>{{ $session->name }}</p>
                            @endforeach
                        </div>

                        <x-select label="票类型" :options="$event->ticketTypes" name="ticketTypeId"/>

                        <x-slot:actions>
                            <x-button label="购票" class="btn-primary" type="submit" spinner="save"/>
                        </x-slot:actions>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

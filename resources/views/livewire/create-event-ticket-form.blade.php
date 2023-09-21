<div>
    <x-form class="p-6">
        <x-select label="票类型" :options="$event->ticketTypes" placeholder="Select an ticket type"
                  wire:model.live="ticketTypeId"/>

        @if($ticketType)
            余票：{{ data_get($ticketType, 'quantity') - data_get($ticketType, 'sold_quantity') }}
        @endif

        <x-slot:actions>
            <x-button class="btn-primary" type="button" wire:click="submit">购票</x-button>
        </x-slot:actions>
    </x-form>
</div>

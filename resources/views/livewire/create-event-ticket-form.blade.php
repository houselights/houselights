<div>
    <x-form class="p-6">
        {{ csrf_field() }}

        <x-select label="票类型" :options="$event->ticketTypes" placeholder="Select an ticket type"  wire:model.live="ticketTypeId"/>

        总数：{{ data_get($ticketType, 'quantity') }} 已售：{{ data_get($ticketType, 'sold_quantity') }}

        <x-slot:actions>
            <x-button class="btn-primary" type="button" wire:click="save">购票</x-button>
        </x-slot:actions>
    </x-form>
</div>

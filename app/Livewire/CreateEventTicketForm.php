<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\EventTicket;
use App\Models\EventTicketType;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Locked;
use LivewireUI\Modal\ModalComponent;

class CreateEventTicketForm extends ModalComponent
{
    #[Locked]
    public Event $event;

    public EventTicketType $ticketType;

    public string $ticketTypeId;

    public function rules()
    {
        return [
            'ticketTypeId' => [
                'required',
                'numeric',
                Rule::in($this->event->ticketTypes()->pluck('id')),
            ],
        ];
    }

    public function updatedTicketTypeId()
    {
        $this->ticketType = $this->event->ticketTypes()->find($this->ticketTypeId);
    }

    public function save()
    {
        $this->validate();
        $ticket = EventTicket::make();
        $ticket->ticket_type_id = $this->ticketTypeId;
        $ticket->user()->associate(auth()->user());
        $ticket->save();
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.create-event-ticket-form');
    }
}

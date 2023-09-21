<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\EventTicket;
use App\Models\EventTicketType;
use Closure;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Locked;
use LivewireUI\Modal\ModalComponent;

class CreateEventTicketForm extends ModalComponent
{
    #[Locked]
    public string $eventId;

    public string $ticketTypeId = "";

    public function rules()
    {
        return [
            'ticketTypeId' => [
                'required',
                'numeric',
                Rule::in(EventTicketType::where('event_id', $this->eventId)->pluck('id')),
                function (string $attribute, mixed $value, Closure $fail) {
                    $ticketType = EventTicketType::find($this->ticketTypeId);
                    if ($ticketType->sold_quantity >= $ticketType->quantity) {
                        $fail("The {$attribute} is invalid.");
                    }
                },
            ],
        ];
    }

    public function submit()
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
        $event = Event::find($this->eventId);
        $ticketType = EventTicketType::find($this->ticketTypeId);

        return view('livewire.create-event-ticket-form', compact('event', 'ticketType'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventTicketRequest;
use App\Models\Event;
use App\Models\EventTicket;
use App\Models\EventTicketType;

class EventTicketController extends Controller
{
    public function store(Event $event, StoreEventTicketRequest $request)
    {
        $ticket = EventTicket::make();
        $ticket->ticket_type_id = $request->get('ticketTypeId');
        $ticket->user()->associate($request->user());
        $ticket->save();

        return redirect()->route('events.tickets.show', compact('event', 'ticket'));
    }

    public function show(Event $event, EventTicket $ticket)
    {
        return $ticket->id;
    }
}

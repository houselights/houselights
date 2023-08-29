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
        $ticketType = $event->ticketTypes()->find($request->get('ticketTypeId'));
        $ticketType->increment('sold_quantity');
        $ticketType->save();

        $ticket = $ticketType->tickets()->make();
        $ticket->user()->associate($request->user());
        $ticket->save();

        return redirect()->route('events.tickets.show', compact('event', 'ticket'));
    }

    public function show(Event $event, EventTicket $ticket)
    {
        return $ticket->id;
    }
}

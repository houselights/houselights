<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRegistrantRequest;
use App\Models\Event;
use App\Models\EventTicket;
use App\Models\EventTicketType;
use Illuminate\Support\Facades\Auth;

class EventRegistrantController extends Controller
{
    public function store(Event $event, StoreEventRegistrantRequest $request)
    {
        $registrant = $event->registrants()->make($request->all());
        $registrant->user()->associate(Auth::user());
        $registrant->save();

        $ticket = EventTicket::make();
        $ticket->ticketType()->associate(EventTicketType::find($request->get('ticketTypeId')));
        $ticket->user()->associate(Auth::user());
        $ticket->save();
    }
}

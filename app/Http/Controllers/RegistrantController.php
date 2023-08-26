<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrantRequest;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class RegistrantController extends Controller
{
    public function store(Event $event, StoreRegistrantRequest $request)
    {
        $registrant = $event->registrants()->make($request->all());
        $registrant->user()->associate(Auth::user());
        $registrant->save();

        $ticket = Event\Ticket::make();
        $ticket->ticketType()->associate(Event\TicketType::find($request->get('ticketTypeId')));
        $ticket->user()->associate(Auth::user());
        $ticket->save();
    }
}

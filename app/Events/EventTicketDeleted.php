<?php

namespace App\Events;

use App\Models\EventTicket;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventTicketDeleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public EventTicket $eventTicket;

    public function __construct(EventTicket $eventTicket)
    {
        $this->eventTicket = $eventTicket;
    }
}

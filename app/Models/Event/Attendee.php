<?php

namespace App\Models\Event;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendee extends Model
{
    use HasFactory;

    protected $table = "event_attendees";

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}

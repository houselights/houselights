<?php

namespace App\Models\Event;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kra8\Snowflake\HasSnowflakePrimary;

class Attendee extends Model
{
    use HasFactory;
    use HasSnowflakePrimary;

    protected $table = "event_attendees";

    protected $fillable = ['ticket_id'];

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
}

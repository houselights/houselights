<?php

namespace App\Models;

use App\Models\Event\Session;
use App\Models\Event\Ticket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kra8\Snowflake\HasSnowflakePrimary;

class EventSessionAttendee extends Model
{
    use HasFactory;
    use HasSnowflakePrimary;

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

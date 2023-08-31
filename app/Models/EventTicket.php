<?php

namespace App\Models;

use App\Events\EventTicketCreated;
use App\Events\EventTicketDeleted;
use App\Events\EventTicketUpdated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasSnowflakePrimary;

class EventTicket extends Model
{
    use HasFactory;
    use HasSnowflakePrimary;

    protected $fillable = ['user_id'];

    protected static function booted()
    {
        static::creating(function (EventTicket $eventTicket) {
            $ticketType = $eventTicket->ticketType;
            $ticketType->increment('sold_quantity');
            $ticketType->save();
        });

        static::created(function (EventTicket $eventTicket) {
            EventRegistrant::firstOrCreate([
                'event_id' => $eventTicket->ticketType->event_id,
                'user_id' => $eventTicket->user_id,
            ]);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ticketType(): BelongsTo
    {
        return $this->belongsTo(EventTicketType::class);
    }

    public function attendees(): HasMany
    {
        return $this->hasMany(EventSessionAttendee::class);
    }

    protected $dispatchesEvents = [
        'created' => EventTicketCreated::class,
        'updated' => EventTicketUpdated::class,
        'deleted' => EventTicketDeleted::class,
    ];
}

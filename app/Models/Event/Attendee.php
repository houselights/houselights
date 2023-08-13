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

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}

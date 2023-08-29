<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasSnowflakePrimary;

class EventTicketType extends Model
{
    use HasFactory;
    use HasSnowflakePrimary;

    protected $fillable = ['name', 'description'];

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(EventTicket::class, 'ticket_type_id');
    }
}

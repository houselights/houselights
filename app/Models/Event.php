<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasSnowflakePrimary;
use Spatie\Tags\HasTags;

class Event extends Model
{
    use HasFactory;
    use HasSnowflakePrimary;
    use HasTags;

    protected $fillable = ['name', 'description', 'timezone', 'event_type', 'access_level', 'meeting_type', 'status', 'start_time', 'end_time', 'contact_name', 'lobby_start_time', 'lobby_end_time'];

    public function sessions(): HasMany
    {
        return $this->hasMany(EventSession::class);
    }

    public function ticketTypes(): HasMany
    {
        return $this->hasMany(EventTicketType::class);
    }

    public function registrants(): HasMany
    {
        return $this->hasMany(EventRegistrant::class);
    }

    public function exhibitors(): HasMany
    {
        return $this->hasMany(EventExhibitor::class);
    }
}

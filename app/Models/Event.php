<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasSnowflakePrimary;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Tags\HasTags;

class Event extends Model implements HasMedia
{
    use HasFactory;
    use HasSnowflakePrimary;
    use HasTags;
    use InteractsWithMedia;

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

    public function speakers(): HasMany
    {
        return $this->hasMany(EventSpeaker::class);
    }

    public function pages(): HasMany
    {
        return $this->hasMany(EventPage::class);
    }

    public function menus(): HasMany
    {
        return $this->hasMany(EventMenu::class);
    }

    public function hub(): BelongsTo
    {
        return $this->belongsTo(Hub::class);
    }
}

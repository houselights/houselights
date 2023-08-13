<?php

namespace App\Models;

use App\Models\Event\Registrant;
use App\Models\Event\Session;
use App\Models\Event\TicketType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasSnowflakePrimary;

class Event extends Model
{
    use HasFactory;
    use HasSnowflakePrimary;

    protected $fillable = ['name', 'description'];

    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class);
    }

    public function ticketTypes(): HasMany
    {
        return $this->hasMany(TicketType::class);
    }

    public function registrants(): HasMany
    {
        return $this->hasMany(Registrant::class);
    }
}

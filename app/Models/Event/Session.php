<?php

namespace App\Models\Event;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Session extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    protected $table = "event_sessions";

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}

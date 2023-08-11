<?php

namespace App\Models;

use App\Models\Event\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class);
    }
}

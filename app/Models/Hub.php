<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasSnowflakePrimary;

class Hub extends Model
{
    use HasFactory;
    use HasSnowflakePrimary;

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class WesternScale extends Model
{
    use HasFactory;

    public function list(): Attribute
    {
        return Attribute::make(
            get: fn () => [
                $this->first,
                $this->second,
                $this->third,
                $this->fourth,
                $this->fifth,
                $this->sixth,
                $this->seventh,
            ]
        );
    }

    public function alsoKnownAs(): HasOne
    {
        return $this->HasOne(AlsoKnownAs::class);
    }
}

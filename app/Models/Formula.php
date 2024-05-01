<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formula extends Model
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
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Raga extends Model
{
    use HasFactory;

    public function notes(): HasOne
    {
        return $this->hasOne(Note::class);
    }

    public function formula(): HasOne
    {
        return $this->hasOne(Formula::class);
    }

    public function arohana(): HasOne
    {
        return $this->hasOne(Arohana::class);
    }

    public function avarohana(): HasOne
    {
        return $this->hasOne(Avarohana::class);
    }

    public function similarRaga(): HasMany
    {
        return $this->hasMany(SimilarRaga::class);
    }

    public function janya(): HasMany
    {
        return $this->hasMany(MelakartaJanyaLink::class);
    }

    protected function isJanya(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->id > 72
        );
    }

    protected function previous(): Attribute
    {
        return Attribute::make(
            get: fn () => Raga::where('id', '<', $this->id)->max('id')
        );
    }

    protected function next(): Attribute
    {
        return Attribute::make(
            get: fn () => Raga::where('id', '>', $this->id)->min('id')
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Raga extends Model
{
    use HasFactory;

    public const MELAKARTA_LIMIT = 72;

    public function notes(): HasOne
    {
        return $this->hasOne(Note::class);
    }

    public function formula(): HasOne
    {
        return $this->hasOne(Formula::class);
    }

    public function arohana(): HasMany
    {
        return $this->hasMany(Arohana::class);
    }

    public function avarohana(): HasMany
    {
        return $this->hasMany(Avarohana::class);
    }

    public function similarRaga(): HasMany
    {
        return $this->hasMany(SimilarRaga::class);
    }

    public function alsoKnownAs(): HasOne
    {
        return $this->hasOne(AlsoKnownAs::class);
    }

    public function janya(): HasMany
    {
        return $this->hasMany(MelakartaJanyaLink::class);
    }

    protected function isJanya(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->id > self::MELAKARTA_LIMIT
        );
    }

    public function scopeIsMelakarta(Builder $query): Builder
    {
        return $query->where('id', '<=', self::MELAKARTA_LIMIT);
    }

    public function scopeIsJanya(Builder $query): Builder
    {
        return $query->where('id', '>', self::MELAKARTA_LIMIT);
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

    public function shadja(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->arohana->where('order', 0)->first()
        );
    }

    public function rishabha(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->arohana->where('order', 1)->first()
        );
    }

    public function gandhara(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->arohana->where('order', 2)->first()
        );
    }

    public function madhyama(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->arohana->where('order', 3)->first()
        );
    }

    public function panchama(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->arohana->where('order', 4)->first()
        );
    }

    public function dhaivata(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->arohana->where('order', 5)->first()
        );
    }

    public function nishada(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->arohana->where('order', 6)->first()
        );
    }
}

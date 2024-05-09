<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Arohana extends Model
{
    use HasFactory;

    public function swara(): HasMany
    {
        die('test');
        return $this->hasMany(Swara::class);
    }

    public function list(): Attribute
    {
        return Attribute::make(
            get: fn () => [
                $this->shadja,
                $this->rishabha,
                $this->gandhara,
                $this->madhyama,
                $this->panchama,
                $this->dhaivata,
                $this->nishada,
            ]
        );
    }
}

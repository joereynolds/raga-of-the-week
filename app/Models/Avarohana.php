<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Avarohana extends Model
{
    use HasFactory;

    public function swara(): BelongsTo
    {
        return $this->belongsTo(Swara::class);
    }

    public function list(): Attribute
    {
        return Attribute::make(
            get: fn () => [
                $this->shadja,
                $this->nishada,
                $this->dhaivata,
                $this->panchama,
                $this->madhyama,
                $this->gandhara,
                $this->rishabha,
            ]
        );
    }
}

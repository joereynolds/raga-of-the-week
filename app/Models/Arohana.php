<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arohana extends Model
{
    use HasFactory;

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

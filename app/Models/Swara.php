<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Swara extends Model
{
    use HasFactory;

    public function arohana(): BelongsTo
    {
        return $this->BelongsTo(Arohana::class);
    }
}

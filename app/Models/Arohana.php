<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Arohana extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function swara(): BelongsTo
    {
        return $this->belongsTo(Swara::class);
    }
}

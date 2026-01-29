<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Week extends Model
{
    use HasFactory;

    protected $fillable = ['week', 'raga_id'];

    public $timestamps = false;

    public function raga(): BelongsTo
    {
        return $this->BelongsTo(Raga::class);
    }
}

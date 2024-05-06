<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AlsoKnownAs extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['raga_id', 'western_scale_id'];

    public function westernScale(): BelongsTo
    {
        return $this->belongsTo(WesternScale::class);
    }
}

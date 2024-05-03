<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SimilarRaga extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['raga_id', 'linked_raga_id'];

    public function raga(): BelongsTo
    {
        return $this->belongsTo(Raga::class, 'linked_raga_id');
    }
}

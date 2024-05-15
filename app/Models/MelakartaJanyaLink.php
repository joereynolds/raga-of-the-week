<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MelakartaJanyaLink extends Model
{
    use HasFactory;

    public function raga(): BelongsTo
    {
        return $this->belongsTo(Raga::class, 'janya_id');
    }
}

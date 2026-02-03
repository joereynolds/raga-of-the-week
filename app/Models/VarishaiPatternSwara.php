<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VarishaiPatternSwara extends Model
{

    public function swaraRelativeNotation(): BelongsTo
    {
        return $this->BelongsTo(SwaraRelativeNotation::class);
    }
}

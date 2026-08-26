<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chakra extends Model
{
    public function ragaLink(): HasMany
    {
        return $this->hasMany(ChakraRagaLink::class);
    }
}

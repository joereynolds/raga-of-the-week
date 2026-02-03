<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SwaraRelativeNotation extends Model
{
    /**
     * Get the swara for this relative notation position in a given raga.
     * Uses the raga's arohana to map position to actual swara.
     */
    public function getSwaraForRaga(Raga $raga)
    {
        // The relative notation ID corresponds to the position in the arohana
        // ID 1 = first note (order 0), ID 2 = second note (order 1), etc.
        // So we need to subtract 1 from the ID to get the order
        return $raga->arohana()->where('order', $this->id - 1)->first()?->swara;
    }
}

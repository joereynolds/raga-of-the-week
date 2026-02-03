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
        // ID 1 = first note (s), ID 2 = second note (r), etc.
        return $raga->arohana()->where('order', $this->id)->first()?->swara;
    }
}

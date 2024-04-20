<?php

use App\Models\Raga;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('avarohanas', function (Blueprint $table) {
            $table->foreignIdFor(Raga::class)->constrained();
            $table->string('shadja')->nullable();
            $table->string('nishada')->nullable();
            $table->string('dhaivata')->nullable();
            $table->string('panchama')->nullable();
            $table->string('madhyama')->nullable();
            $table->string('gandhara')->nullable();
            $table->string('rishabha')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('avarohana');
    }
};

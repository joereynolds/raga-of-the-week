<?php

use App\Models\Swara;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('arohanas', function (Blueprint $table) {
            $table->dropColumn([
                'shadja',
                'rishabha',
                'gandhara',
                'madhyama',
                'panchama',
                'dhaivata',
                'nishada',
            ]);

            $table->foreignIdFor(Swara::class)->constrained();
            $table->integer('order');
        });

        Schema::table('avarohanas', function (Blueprint $table) {
            $table->dropColumn([
                'shadja',
                'rishabha',
                'gandhara',
                'madhyama',
                'panchama',
                'dhaivata',
                'nishada',
            ]);

            $table->foreignIdFor(Swara::class)->constrained();
            $table->integer('order');
        });
    }

    public function down(): void
    {
        //
    }
};

<?php

use App\Models\Generation;
use App\Models\Talent;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generation_talent', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Generation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Talent::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('generation_talent');
    }
};

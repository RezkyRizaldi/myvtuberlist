<?php

use App\Models\Generation;
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
        Schema::create('talent', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('japanese_name')->nullable();
            $table->json('nicknames')->nullable();
            $table->text('description')->nullable();
            $table->string('greeting')->nullable();
            $table->json('images_url')->nullable();
            $table->timestamp('debuted_at')->nullable();
            $table->string('debut_platform')->default('YouTube')->nullable();
            $table->enum('status', ['active', 'graduated', 'retired'])->default('active')->nullable();
            $table->enum('gender', ['male', 'female'])->default('female')->nullable();
            $table->string('age')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('height')->nullable()->comment('in cm');
            $table->json('oshi_mark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talent');
    }
};

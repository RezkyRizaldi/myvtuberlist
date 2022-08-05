<?php

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
        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->string('channel_id')->unique();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->string('country')->nullable();
            $table->string('view_count')->nullable();
            $table->string('subscriber_count')->nullable();
            $table->boolean('hidden_subscriber_count')->default(false);
            $table->string('video_count')->nullable();
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
        Schema::dropIfExists('channels');
    }
};

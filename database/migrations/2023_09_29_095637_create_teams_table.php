<?php

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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('title');
            $table->text('facebook_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('linked_in_url')->nullable();
            $table->text('other_url')->nullable();
            $table->text('image')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0=inactive;1=active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};

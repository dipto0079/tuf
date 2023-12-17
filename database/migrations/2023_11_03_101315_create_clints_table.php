<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('clints', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("username");
            $table->string("email");
            $table->string("number");
            $table->string("address");
            $table->string("country");
            $table->string("state");
            $table->string("city");
            $table->integer("zip");
            $table->timestamps();
        });
    }
    public function down(): void
{
    Schema::dropIfExists('clints');
}

   
};



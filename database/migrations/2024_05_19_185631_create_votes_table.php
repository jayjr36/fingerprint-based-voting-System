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
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voter_id');
            $table->string('president');
            $table->string('MP');
            $table->string('councilor');
            $table->timestamps();

            $table->foreign('voter_id')->references('fingerprint_id')->on('voters')->onDelete('cascade')->name('voter_voter_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};

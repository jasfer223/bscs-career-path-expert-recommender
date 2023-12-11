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
        Schema::create('bscs_career_interest', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bscs_career_id');
            $table->unsignedBigInteger('interest_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bscs_career_interest');
    }
};

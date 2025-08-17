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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('brand');
            $table->string('website');
            $table->string('services');
            $table->string('ideal_client');
            $table->json('pain_points')->nullable();      // stores pain_points[]
            $table->string('pain_points_other')->nullable();
            $table->text('frustration_details')->nullable();
            $table->string('package');
            $table->string('timeline');
            $table->string('referral');
            $table->json('calendly')->nullable();         // if you decide to submit it later
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};

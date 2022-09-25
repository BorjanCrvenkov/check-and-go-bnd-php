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
    public function up(): void
    {
        Schema::create('business_phone_numbers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('business_id')->nullable();
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->string('phone_numbers')->unique();
            $table->smallInteger('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('business_phone_numbers');
    }
};

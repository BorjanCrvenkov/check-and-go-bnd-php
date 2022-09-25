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
        Schema::create('user_business_reservation', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('business_id')->nullable();
            $table->bigInteger('reservation_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->foreign('reservation_id')->references('id')->on('reservations');
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
        Schema::dropIfExists('user_business_reservation');
    }
};

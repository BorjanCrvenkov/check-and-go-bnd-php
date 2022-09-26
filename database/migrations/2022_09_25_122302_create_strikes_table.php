<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('strikes', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->bigInteger('review_id')->nullable();
            $table->bigInteger('reservation_id')->nullable();
            $table->foreign('review_id')->references('id')->on('reviews');
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
        Schema::dropIfExists('strikes');
    }
};

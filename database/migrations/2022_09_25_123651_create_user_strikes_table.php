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
        Schema::create('user_strikes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('strike_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('strike_id')->references('id')->on('strikes');
            $table->smallInteger('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['user_id', 'strike_id'], 'user_strike_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('user_strikes');
    }
};

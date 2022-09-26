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
        Schema::create('user_table_reservations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('table_id')->nullable();
            $table->bigInteger('reservation_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('table_id')->references('id')->on('tables');
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
        Schema::dropIfExists('user_table_reservation');
    }
};

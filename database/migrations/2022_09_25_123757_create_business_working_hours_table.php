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
        Schema::create('business_working_hours', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('business_id')->nullable();
            $table->bigInteger('working_hours_id')->nullable();
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->foreign('working_hours_id')->references('id')->on('working_hours');
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
        Schema::dropIfExists('business_working_hours');
    }
};

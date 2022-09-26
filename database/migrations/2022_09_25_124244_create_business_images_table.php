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
        Schema::create('business_images', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('business_id')->nullable();
            $table->bigInteger('image_id')->nullable();
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->foreign('image_id')->references('id')->on('images');
            $table->smallInteger('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['business_id', 'image_id'], 'business_image_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('business_images');
    }
};

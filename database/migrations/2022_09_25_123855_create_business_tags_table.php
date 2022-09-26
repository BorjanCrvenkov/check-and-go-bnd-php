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
        Schema::create('business_tags', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('business_id')->nullable();
            $table->bigInteger('tag_id')->nullable();
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->smallInteger('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['business_id', 'tag_id'], 'business_tag_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('business_tags');
    }
};

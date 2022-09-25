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
        Schema::create('menu_item_tags', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('menu_item_id')->nullable();
            $table->bigInteger('tag_id')->nullable();
            $table->foreign('menu_item_id')->references('id')->on('menu_items');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('menu_item_tags');
    }
};

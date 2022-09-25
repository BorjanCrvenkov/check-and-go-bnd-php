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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('embg')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('image_id')->nullable();
            $table->bigInteger('role_id')->nullable();
            $table->bigInteger('payment_plan_id')->nullable();
            $table->foreign('image_id')->references('id')->on('images');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('payment_plan_id')->references('id')->on('payment_plans');
            $table->smallInteger('status')->default(0);
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

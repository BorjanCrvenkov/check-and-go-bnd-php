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
        Schema::create('business_employees', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id')->nullable();
            $table->bigInteger('business_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('users');
            $table->foreign('business_id')->references('id')->on('businesses');
            $table->smallInteger('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->unique(['employee_id', 'business_id'], 'business_employees_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('business_employees');
    }
};

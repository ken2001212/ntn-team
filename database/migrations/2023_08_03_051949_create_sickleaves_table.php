<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sickleaves', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('time')->nullable();
            $table->string('select')->nullable();
            $table->string('leave')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sickleaves');
    }
};

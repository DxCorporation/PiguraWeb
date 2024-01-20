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
        Schema::create('register_estimasis', function (Blueprint $table) {
            $table->id();
            $table->string('ip', 45);
            $table->string('name', 100);
            $table->integer('umur');
            $table->string('alamat');
            $table->date('date');
            $table->integer('hits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_estimasis');
    }
};

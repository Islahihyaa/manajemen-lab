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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('roomCapacity');
            $table->tinyInteger('computerAvaiable');
            $table->tinyInteger('screenProjector');
            $table->tinyInteger('projector');
            $table->unsignedBigInteger('labolatoryId');
            $table->foreign('labolatoryId')->references('id')->on('laboratory');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};

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
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('depart');
            $table->string('arrive');
            
            $table->string('softdelete');
            $table->integer('rating')->nullable();
            $table->foreignId('chauffeur_id')
            ->constrained('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreignId('passager_id')
            ->constrained('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
};
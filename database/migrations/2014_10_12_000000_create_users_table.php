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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('picture');
            $table->string('phone');
            $table->text('description')->nullable();
            $table->string('matricule')->nullable();
            $table->enum('status',['disponible','en cour','hors service'])->nullable();
            $table->string('typeVoiture')->nullable();
            $table->string('typePayement')->nullable();
            $table->string('depart')->nullable();
            $table->string('arrive')->nullable();
            $table->string('softdelete');
            $table->enum('role',['admin','passager','chauffeur']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
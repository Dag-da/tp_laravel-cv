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
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->default('Sylvain');
            $table->string('last_name')->default('Leflon');
            $table->string('adress')->default('275, rue Léon Blum');
            $table->string('city')->default('Sotteville-lès-Rouen');
            $table->integer('zip_code')->default(76300);
            $table->string('phone')->default('+33695855672');
            $table->string('email')->default('sylvain.leflon@gmail.com');
            $table->text('about');
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
        Schema::dropIfExists('identities');
    }
};

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
        Schema::create('veflixes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('synopsis');
            $table->string('duration');
            $table->string('genre');
            $table->string('rating');
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
        Schema::dropIfExists('veflix');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('name');
            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->string('zip')->nullable();
            $table->string('town')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('organizers');
    }
};

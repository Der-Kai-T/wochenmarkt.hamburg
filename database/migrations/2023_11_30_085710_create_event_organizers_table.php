<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('event_organizers', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('event_id');
            $table->string('organizer_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_organizers');
    }
};

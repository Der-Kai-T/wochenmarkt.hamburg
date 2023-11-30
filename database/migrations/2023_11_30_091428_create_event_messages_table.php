<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('event_messages', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('event_id');
            $table->string('message');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_messages');
    }
};

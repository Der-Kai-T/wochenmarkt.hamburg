<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('event_instances', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('event_id');
            $table->integer('day_of_week');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->decimal('price');
            $table->string('unit');
            $table->string('price_power');
            $table->text("needed_goods")->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_instances');
    }
};

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
        Schema::create('slots', function (Blueprint $table) {
            $table->id();
            $table->integer('slot_number');
            $table->boolean('is_vip')->default(0);
            $table->string('team_name');
            $table->string('team_tag');
            $table->string('team_manager');
            $table->enum('choices', array('confirmed', 'canceled', ""))->default("");

            $table->foreignId('scrim_id')
                ->constrained('scrims')
                ->onDelete('cascade');

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
        Schema::dropIfExists('slots');
    }
};

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
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('rank');
            $table->string('team_name');
            $table->string('team_tag');
            $table->integer('wwcd');
            $table->integer('placement_points');
            $table->integer('kill_points');
            $table->integer('total_points');
            $table->integer('games_missed');

            $table->foreignId('result_id')
                ->constrained('results')
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
        Schema::dropIfExists('scores');
    }
};

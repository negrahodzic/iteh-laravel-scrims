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
        Schema::create('server', function (Blueprint $table) {
            $table->id();
            $table->string('server_id');
            $table->boolean('enabled_bot')->default(0);
            $table->string('role_admin_id');
            $table->string('role_results_id');
            $table->string('channel_logs_id');
            $table->string('reaction_correct_id')->default('1037825536782770206');
            $table->string('reaction_incorrect_id')->default('1037825532651372554');
            $table->string('reaction_waitlist_id')->default('1037825525705609256');
            $table->string('reaction_banned_id')->default('1037825529866366986');
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
        Schema::dropIfExists('server');
    }
};

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
        Schema::create('scrims', function (Blueprint $table) {
            $table->id();
            $table->boolean('enabled_scrim')->default(0);
            $table->string('scrim_name');

            $table->string('channel_registrations_id');
            $table->string('channel_confirmations_id');
            $table->string('channel_idpw_id');
            $table->string('channel_waitlist_id');
            $table->string('channel_chat_id');

            $table->string('role_registrations_id');
            $table->string('roles_vip_id');
            $table->string('role_waitlist_id');
            $table->string('role_idpw_id');
            $table->string('role_banned_id');

            $table->text('text_early_regs');
            $table->text('text_open_regs');
            $table->text('text_lock_regs');
            $table->text('text_open_waitlist');
            $table->text('text_lock_waitlist');
            $table->text('text_confirmation');
            $table->text('text_slots');
            $table->text('text_free_slots');
            $table->text('text_dm_confirmation');

            $table->string('msg_waitlist_id');
            $table->string('msg_slots_id');
            $table->string('msg_idpw_id');
            $table->string('msg_confirmation_id');

            $table->boolean('is_open_waitlist')->default(0);
            $table->boolean('just_unconfirm')->default(0);
            $table->boolean('allowed_multiple_tags')->default(0);

            $table->integer('number_of_teams')->default(0);
            $table->integer('max_number_of_teams')->default(20);
            $table->integer('number_first_slot')->default(3);
            $table->integer('number_of_vip_slots')->default(1);

            $table->boolean('activate_remove_unconfirmed')->default(0);
            $table->boolean('activate_schedules')->default(0);
            $table->boolean('activate_results')->default(0);

            $table->foreignId('server_id')
                ->constrained('server')
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
        Schema::dropIfExists('scrims');
    }
};

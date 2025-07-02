<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('notification_id');
            $table->string('title');
            $table->string('type'); // info, alerta, etc.
            $table->string('channel'); // SMS, WhatsApp, Email
            $table->text('message');

            $table->timestamp('send_at')->nullable();
            $table->timestamps();

            $table->integer('template_id')->nullable();
            $table->foreign('template_id')->references('template_id')->on('templates')->onDelete('set null');

            $table->integer('group_id')->nullable();
            $table->foreign('group_id')->references('group_id')->on('groups')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
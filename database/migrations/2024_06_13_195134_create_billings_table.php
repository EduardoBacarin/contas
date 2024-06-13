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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("users_id")->references('id')->on('users');
            $table->string('name', 250);
            $table->date('start_date');
            $table->date('end_date');
            $table->date('due_date');
            $table->integer('amount');
            $table->enum('status', ['ongoing', 'paid', 'canceled']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};

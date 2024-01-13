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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->boolean('set_reminder')->default(false);
            $table->string('reminder')->nullable();
            $table->datetime('reminder_date')->nullable();
            $table->morphs('noteable');
            $table->timestamps();
        });
    }
//     text -> text
// set_reminder -> bool default false
// reminder_date -> date time nullable
// reminder-> string nullable
// notable

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};

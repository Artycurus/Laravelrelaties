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
        Schema::create('likeables', function (Blueprint $table) {
            $table->primary(['post_id', 'likeable_id', 'likeable_type']);
            $table->unsignedinterger('post_id');
            $table->unsignedinterger('likeable_id');
            $table->string('likeable_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_user');
    }
};

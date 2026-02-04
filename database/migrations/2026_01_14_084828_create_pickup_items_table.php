<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pickup_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pickup_request_id'); // FK ke pickup_requests
            $table->string('item_name');
            $table->integer('quantity');
            $table->timestamps();

            // foreign key
            $table->foreign('pickup_request_id')
                  ->references('id')
                  ->on('pickup_requests')
                  ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pickup_items');
    }
};

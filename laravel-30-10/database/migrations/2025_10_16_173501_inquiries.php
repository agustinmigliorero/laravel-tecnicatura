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
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id("inquiry_id");
            $table->string("name", 255);
            $table->string("email", 255);
            $table->string("message");
            $table->timestamps();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('property_id')->on('properties')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

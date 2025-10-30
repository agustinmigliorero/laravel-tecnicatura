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
          Schema::create('properties', function (Blueprint $table) {
            $table->id("property_id");
            $table->string("title", 255);
            $table->string("description")->nullable(true);
            $table->decimal("price", 10, 2);
            $table->string("address", 255)->nullable(true);
            $table->enum("property_type", ['Casa', 'Departamento', 'Lote']);
            $table->integer("bedrooms")->nullable(true);
            $table->integer("bathrooms")->nullable(true);
            $table->decimal("area", 10, 2);
            $table->timestamps();
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

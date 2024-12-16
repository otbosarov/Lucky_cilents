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
        Schema::create('cilents', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('workplace');
            $table->integer('client_salary',);
            $table->string('age');
            $table->enum('gender',['male','female']);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cilents');
    }
};

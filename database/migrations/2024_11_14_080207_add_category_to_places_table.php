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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('category');
            $table->string('location');
            $table->string('district');
            $table->string('photo')->after('district');
            $table->foreignId('suggested_by')->constrained('users');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
        Schema::table('places', function (Blueprint $table) {
            $table->dropColumn('photo');
        });
    }
};

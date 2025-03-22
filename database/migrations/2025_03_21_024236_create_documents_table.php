<?php

use App\Models\User;
use App\Models\Repository;
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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Repository::class)->nullable();
            //$table->string('title')->nullable();
            //$table->string('author')->nullable();
            //$table->string('course')->nullable();
            //$table->string('teacher')->nullable();

            $table->text('content')->nullable();
            //$table->string('file')->nullable();

            $table->string('status')->nullable();
            $table->string('score')->nullable();
            $table->string('sourceCounts')->nullable();
            $table->string('textWordCounts')->nullable();
            $table->string('totalPlagiarismWords')->nullable();
            $table->string('identicalWordCounts')->nullable();
            $table->string('credits_used')->nullable();

            $table->text('observation')->nullable();
            $table->boolean('generator')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};

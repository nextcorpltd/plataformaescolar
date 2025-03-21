<?php

use App\Models\Document;
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
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Document::class);
            $table->string('score')->nullable();
            $table->string('canAccess')->nullable();
            $table->string('totalNumberOfWords')->nullable();
            $table->string('plagiarismWords')->nullable();
            $table->string('identicalWordCounts')->nullable();
            $table->string('url')->nullable();
            $table->string('author')->nullable();
            $table->text('description')->nullable();
            $table->string('title')->nullable();
            $table->string('source')->nullable();
            $table->string('citation')->nullable();

            $table->string('startIndex')->nullable();
            $table->string('endIndex')->nullable();
            $table->text('sequence')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sources');
    }
};

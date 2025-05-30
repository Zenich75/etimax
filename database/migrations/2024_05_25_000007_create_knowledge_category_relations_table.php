<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('knowledge_category_relations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('knowledge_id')->constrained()->onDelete('cascade');
            $table->foreignId('knowledge_category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_category_relations');
    }
}; 
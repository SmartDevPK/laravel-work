<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name', 100); // String column with a maximum length of 100
            $table->text('description')->nullable(); // Nullable text column
            $table->decimal('size', 8, 2)->default(0); // Decimal column with 8 total digits and 2 decimal places, defaulting to 0
            $table->timestamps(); // Adds `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products'); // Drop the table if the migration is rolled back
    }
};
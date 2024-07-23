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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('category')->nullable()->after('title')->default('projects');
            $table->string('country')->nullable()->after('category');
            $table->string('client')->nullable()->after('country');
            $table->json('partners')->nullable()->after('client');
            // chage image to nullable
            $table->string('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('category');
            $table->dropColumn('country');
            $table->dropColumn('client');
            $table->dropColumn('partners');
            // chage image to not nullable
            $table->string('image')->nullable(false)->change();
        });
    }
};

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
        Schema::table('addcategories', function (Blueprint $table) {
            $table->string('catimage')->after('catname');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addcategories', function (Blueprint $table) {
            $table->dropColumn('catimage');
        });
    }
};

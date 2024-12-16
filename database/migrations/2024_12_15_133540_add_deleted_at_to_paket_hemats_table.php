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
        Schema::table('paket_hemats', function (Blueprint $table) {
            $table->softDeletes(); // Tambahkan kolom deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('paket_hemats', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Hapus kolom deleted_at
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('nama'); // Kolom nama
            $table->string('email')->unique(); // Kolom email
            $table->string('password'); // Kolom password
            $table->enum('role', ['admin', 'kasir']); // Kolom role
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); // Menghapus tabel users
    }
};

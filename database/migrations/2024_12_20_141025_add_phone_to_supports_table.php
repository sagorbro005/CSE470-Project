<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('supports', function (Blueprint $table) {
            $table->string('phone')->after('email'); // Add phone column after email
        });
    }

    public function down()
    {
        Schema::table('supports', function (Blueprint $table) {
            $table->dropColumn('phone'); // Rollback by removing the column
        });
    }
};

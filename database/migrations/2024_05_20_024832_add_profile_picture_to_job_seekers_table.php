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
        Schema::table('job_seekers', function (Blueprint $table) {
            $table->string('profile_picture')->nullable()->after('certifications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('job_seekers', function (Blueprint $table) {
            $table->dropColumn('profile_picture');
        });
    }
};

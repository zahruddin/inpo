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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('admin_name')->nullable();
            $table->string('admin_email')->nullable()->unique();
            $table->string('admin_role')->nullable();
            $table->string('admin_phone')->nullable();
            $table->text('admin_address')->nullable();
            $table->json('admin_permissions')->nullable();
            $table->integer('admin_level')->nullable();
            $table->string('admin_avatar')->nullable();
            $table->text('admin_bio')->nullable();
            $table->boolean('admin_status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};

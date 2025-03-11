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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('surname');
            $table->enum('status', ['active', 'inactive', 'banned'])->default('active');
            $table->string('company')->nullable();
            $table->string('position')->nullable();
            $table->text('skills')->nullable();
            $table->string('city')->nullable();
            $table->date('birthday')->nullable();
            $table->string('direction')->nullable();
            $table->string('password');
            $table->enum('role', ['user', 'admin', 'moderator'])->default('user');
            $table->timestamp('auth_date')->nullable();
            $table->string('telegram')->nullable();
            $table->string('link')->nullable();
            $table->boolean('email_confirmed')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

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
        Schema::create('m501_users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50);
            $table->string('password');
            $table->string('erp_user_id', 50);
            $table->integer('roles_id');
            $table->integer('organization_id');
            $table->boolean('is_tmm');
            $table->boolean('is_login_mobile');
            $table->string('fcm_token');
            $table->string('nik', 15);
            $table->string('full_name', 150);
            $table->string('email', 100)->unique();
            $table->string('phone', 50);
            $table->string('image_url');
            $table->string('bank_name', 50);
            $table->string('bank_account', 50);
            $table->boolean('has_npwp');
            $table->string('address');
            $table->boolean('is_active');
            $table->rememberToken();
            $table->string('created_by', 100);
            $table->timestamp('created_on')->useCurrent();
            $table->string('updated_by', 100);
            $table->timestamp('updated_on')->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m501_users');
    }
};

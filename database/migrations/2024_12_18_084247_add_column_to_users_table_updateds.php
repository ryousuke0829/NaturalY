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
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable()->after('email');
            $table->string('zip_code')->nullable()->after('avatar');
            $table->string('prefecture')->nullable()->after('zip_code');
            $table->string('address')->nullable()->after('prefecture');
            $table->string('phone_number')->nullable()->after('address');
            $table->string('farm_name')->nullable()->after('phone_number');
            $table->string('farm_zip_code')->nullable()->after('farm_name');
            $table->string('second_product')->nullable()->after('first_product');
            $table->text('farm_description')->nullable()->after('second_product');
        });
    }

    /**php
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'avatar',
                'zip_code',
                'prefecture',
                'address',
                'phone_number',
                'farm_name',
                'first_product',
                'second_product',
                'farm_description',
            ]);
        });
    }
};
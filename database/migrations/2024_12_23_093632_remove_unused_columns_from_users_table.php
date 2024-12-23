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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'farm_zip_code',
                'farm_prefecture', 
                'farm_address',  
            ]);
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('farm_zip_code')->nullable()->after('farm_name');
            $table->string('farm_prefecture')->nullable()->after('farm_name');
            $table->string('farm_address')->nullable()->after('farm_name');
        });
    }
    
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherEntities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('site_meta')) {
            Schema::create('site_meta', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->string('value');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('site_meta')) {
            Schema::drop('site_meta');
        }
    }
}

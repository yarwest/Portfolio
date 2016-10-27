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
                $table->boolean('isLink')->default(false);
            });
        }

        if(!Schema::hasTable('members')) {
            Schema::create('members', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->string('img_name');
                $table->string('desc');
                $table->string('website')->nullable();
                $table->string('github');
            });
        }

        if(!Schema::hasTable('portfolio_items')) {
            Schema::create('portfolio_items', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->string('img_name')->nullable();
                $table->text('desc')->nullable();
                $table->string('link')->nullable();
                $table->boolean('compean_collab')->default(false);
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
        if(Schema::hasTable('members')) {
            Schema::drop('members');
        }

        if(Schema::hasTable('portfolio_items')) {
            Schema::drop('portfolio_items');
        }
    }
}

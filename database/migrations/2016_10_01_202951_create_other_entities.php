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

        if(!Schema::hasTable('portfolio_items')) {
            Schema::create('portfolio_items', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->unique();
                $table->mediumText('desc')->nullable();
                $table->string('link')->nullable();
            });
        }

        if(!Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $table) {
                $table->string('name')->unique();
                $table->mediumText('desc')->nullable();
            });
        }

        if(!Schema::hasTable('blog_posts')) {
            Schema::create('blog_posts', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('blog');
                $table->foreign('blog')
                    ->references('name')->on('blogs');
                $table->mediumText('body');
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

        if(Schema::hasTable('portfolio_items')) {
            Schema::drop('portfolio_items');
        }

        if(Schema::hasTable('blog_posts')) {
            Schema::table('blog_posts', function (Blueprint $table) {
                $table->dropForeign(['blog']);
            });
            Schema::drop('blog_posts');
        }

        if(Schema::hasTable('blogs')) {
            Schema::drop('blogs');
        }
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostImageToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //modify table post add post_image
        Schema::table('posts', function($table){

            $table->string('post_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // modify posts table, drop post_image column
        Schema::table('posts', function($table){

            $table->dropColumn('post_image');
        });
    }
}

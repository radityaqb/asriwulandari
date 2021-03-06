<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFipulpBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fipulp_blog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->integer('created_by');
            $table->text('title');
            $table->text('subtitle');
            $table->text('img_header');
            $table->text('content');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fipulp_blog');
    }
}

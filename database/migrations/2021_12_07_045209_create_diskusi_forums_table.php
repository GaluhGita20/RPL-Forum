<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiskusiForumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskusi_forums', function (Blueprint $table) {
            $table->id('id_diskusi');
            $table->unsignedBiginteger('topic_id')->unsigned();
            $table->foreign('topic_id')->references('id_topic')->on('topics')->onDelete('cascade');
            $table->unsignedBiginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->text('diskusi');
            $table->integer('jmlh_like')->default(0);
            $table->integer('jmlh_dislike')->default(0);
            $table->enum('status_post', ['up', 'down'])->default('up');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diskusi_forums');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->id('id_topic');
            $table->unsignedBiginteger('ket_id')->unsigned();
            $table->foreign('ket_id')->references('id_ket')->on('kets')->onDelete('cascade');
            $table->unsignedBiginteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name_topic');
            $table->string('slug_topic', 255);
            $table->integer('total_likes')->default(0);
            $table->integer('total_voices')->default(0);
            $table->boolean('is_pinned');
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
        Schema::dropIfExists('topics');
    }
}

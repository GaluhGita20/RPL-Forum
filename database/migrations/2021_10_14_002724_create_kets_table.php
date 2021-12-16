<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kets', function (Blueprint $table) {
            $table->id('id_ket');
            $table->string('name_kategori');
            $table->string('slug_kat', 255);
            $table->text('desc');
            $table->string('image')->nullable();
            $table->integer('total_topics')->default(0);
            $table->integer('total_posts')->default(0);
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
        Schema::dropIfExists('kets');
    }
}

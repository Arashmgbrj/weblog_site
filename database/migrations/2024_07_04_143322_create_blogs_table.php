<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titile_m');
            $table->string('m_par');
            $table->string('titile_1');
            $table->string('pr_1');
            $table->string('titile_2');
            $table->string('pr_2');
            $table->integer('like')->default(0);
            $table->string('image_path')->nullable();
            $table->string('category');
            $table->string('label');
            $table->string('aouther');
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
        Schema::dropIfExists('blogs');
    }
}

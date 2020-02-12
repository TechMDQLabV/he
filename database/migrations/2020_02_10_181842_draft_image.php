<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DraftImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   Schema::create('draft_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('featured')->default(false);
            $table->integer('draft_id')->unsigned();
            $table->foreign('draft_id')->references('id')->on('drafts')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('draft_images');
    }
}

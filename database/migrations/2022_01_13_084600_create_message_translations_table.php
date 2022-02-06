<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('message_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->longText('description');
            $table->unique(['message_id', 'locale']);
            $table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
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
        Schema::dropIfExists('message_translations');
    }
}

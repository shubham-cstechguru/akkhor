<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('slider_title')->nullable();
            $table->string('salient_title')->nullable();
            $table->string('service_title')->nullable();
            $table->string('client_title')->nullable();
            $table->text('slider_description')->nullable();
            $table->text('salient_desc')->nullable();
            $table->text('service_desc')->nullable();
            $table->text('client_desc')->nullable();
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
        Schema::dropIfExists('homes');
    }
}

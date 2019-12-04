<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('url1');
            $table->longText('url2')->nullable()->default(null);
            $table->longText('url3')->nullable()->default(null);
            $table->longText('url4')->nullable()->default(null);
            $table->longText('url5')->nullable()->default(null);
            $table->longText('url6')->nullable()->default(null);
            $table->string('title');
            $table->longText('description');
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
        Schema::dropIfExists('works');
    }
}

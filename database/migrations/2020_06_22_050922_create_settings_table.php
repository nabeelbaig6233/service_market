<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('email');
            $table->string('address');
            $table->string('logo');
            $table->string('favico');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->boolean('status')->default(true);
            $table->integer('created_by',false);
            $table->integer('updated_by',false);
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
        Schema::dropIfExists('settings');
    }
}

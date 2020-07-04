<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUsersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role',['admin','user'])->after('id');
            $table->string('image')->nullable()->after('remember_token');
            $table->string('phone');
            $table->date('date_of_birth');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->text('about');
            $table->text('address');
            $table->integer('created_by',false);
            $table->integer('updated_by',false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function (Blueprint $table) {
            $table->dropColumn('role');
            $table->dropColumn('image');
            $table->dropColumn('phone');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('facebook');
            $table->dropColumn('instagram');
            $table->dropColumn('twitter');
            $table->dropColumn('about');
            $table->dropColumn('address');
            $table->dropColumn('created_by');
            $table->dropColumn('updated_by');
        });
    }
}

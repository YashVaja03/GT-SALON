<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GTTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         
        Schema::create('gttable', function (Blueprint $table) {

            $table->id('id');
            $table->string('name',60);
            $table->string('email',100);
            $table->string('password');
            $table->string('mobile');
            $table->string('datetime');
            $table->timestamps();//created_at updated_at
            });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

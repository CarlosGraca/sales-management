<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('telephone');
            $table->string('email');
            $table->text('location');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table){
            $table->integer('provider_id')->unsigned()->index()->default(1);
            $table->foreign('provider_id')
                  ->references('id')
                  ->on('providers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('providers');
    }
}

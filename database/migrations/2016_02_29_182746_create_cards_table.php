<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
        
    DB::table('cards')->insert(array(
        array ('title'=>'This is the first cards'),
        array ('title'=>'This is the second cards'),
        array ('title'=>'This is the third cards'),
        array ('title'=>'This is the fourt cards')
    ));   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cards');
    }
}

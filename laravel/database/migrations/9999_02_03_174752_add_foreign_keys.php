<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beverages', function (Blueprint $table){

            $table->foreign('bottle_id','beverage-bottle')
                  ->references('id')
                  ->on('bottles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('beverages', function (Blueprint $table){

            $table->dropForeign('beverage-bottle');
        });
    }
}

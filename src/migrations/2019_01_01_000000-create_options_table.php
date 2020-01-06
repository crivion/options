<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options_table', function (Blueprint $table) {

        	// create fields
            $table->increments('id');
            $table->string('option_name')->unique();
            $table->longText( 'option_value' );

            // add indexes
            $table->index([ 'option_name' ]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options_table');
    }
}

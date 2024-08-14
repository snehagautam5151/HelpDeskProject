<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addtickets', function (Blueprint $table) {
            $table->id();
            $table->integer('userid') ;
            $table->string('title') ;
            $table->string('priority') ;
            $table->string('departments') ;
            $table->string('categories') ;
            $table->string('agentname') ;
            $table->string('attachments') ;
            $table->string('descriptions') ;
          
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
        Schema::dropIfExists('addtickets');
    }
};
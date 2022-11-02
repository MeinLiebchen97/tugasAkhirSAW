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
        Schema::create('data1s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('c1');
            $table->double('c2');
            $table->double('c3');
            $table->double('c4');
            $table->double('c5');
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
        Schema::dropIfExists('data1s');
    }
};

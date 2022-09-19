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
        Schema::create('targets', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('fullname');
            $table->integer('state_id');
            $table->string('constituency')->nullable();
            $table->string('designation');
            $table->string('phone_number');
            $table->string('email');
            $table->tinyInteger('approved')->default(0)->comment('0 means not approved and 1 mean approved');
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
        Schema::dropIfExists('targets');
    }
};

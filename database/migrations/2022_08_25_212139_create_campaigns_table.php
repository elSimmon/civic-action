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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->integer('organization_id');
            $table->string('title');
            $table->text('description');
            $table->text('objective');
            $table->integer('category_id');
            $table->integer('target_category_id');
            $table->integer('state_id');
            $table->integer('lga_id');
            $table->string('type');
            $table->text('message');
            $table->bigInteger('goal');
            $table->tinyInteger('approved')->default(0);
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
        Schema::dropIfExists('campaigns');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totalizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('toilet_id');
            $table->integer('evaluation')->nullable();
            $table->integer('total_users')->default('0');
            $table->integer('probability_enter_male')->default('0');
            $table->integer('probability_enter_female')->default('0');
            $table->string('beautifulness_male',30)->default('未回答');
            $table->string('beautifulness_female',30)->default('未回答');
            $table->integer('number_male')->default('0');
            $table->integer('number_female')->default('0');
            $table->string('distance',30);
            $table->timestamps();

            $table->foreign('toilet_id')
            ->references('id')
            ->on('toilets')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('totalizations');
    }
}

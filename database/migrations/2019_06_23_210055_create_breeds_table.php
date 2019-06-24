<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breeds', function (Blueprint $table) {
            $table->increments('cat_id');
            $table->string('id');
            $table->string('name',150);
            $table->string('temperament',255);
            $table->string('life_span',255);
            $table->string('alt_names',255);
            $table->string('wikipedia_url',255);
            $table->string('origin',255);
            $table->integer('experimental');
            $table->integer('hairless');
            $table->integer('natural');
            $table->integer('rare');
            $table->integer('rex');
            $table->integer('supress_tail');
            $table->integer('short_legs');
            $table->integer('hypoallergenic');
            $table->integer('adaptability');
            $table->integer('affection_level');
            $table->string('country_code',20);
            $table->integer('child_friendly');
            $table->integer('dog_friendly');
            $table->integer('energy_level');
            $table->integer('grooming');
            $table->integer('health_issues');
            $table->integer('intelligence');
            $table->integer('shedding_level');
            $table->integer('social_needs');
            $table->integer('stranger_friendly');
            $table->integer('vocalisation');
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
        Schema::dropIfExists('breeds');
    }
}

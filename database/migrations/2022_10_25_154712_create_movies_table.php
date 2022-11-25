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
        Schema::create('mytable', function ( $table) {
            //$table->id();
            //$table->timestamps();
            $table->id();
            $table->string('adult')->nullable();
            $table->string('backdrop_path')->nullable();
            $table->string('name')->nullable();
            $table->string('overview',2000);
            $table->string('original_language',2)->nullable();
            $table->string('original_name',43)->nullable();
            $table->string('original_title',50)->nullable();
            $table->string('poster_path',100)->nullable();
            $table->string('media_type',5)->nullable();
            $table->float('genre_ids0',11)->nullable();
            $table->float('genre_ids1',11)->nullable();
            $table->float('genre_ids2',11)->nullable();
            $table->date('first_air_date')->nullable();
            $table->date('release_date')->nullable();
            $table->decimal('vote_average',$precision = 5, $scale = 2)->nullable();
            $table->decimal('popularity',$precision = 8, $scale = 2)->nullable();
            $table->decimal('score',$precison=1, $scale = 0)->nullable();
            $table->float('vote_count',11)->nullable();
            $table->string('origin_country0',2)->nullable();
            $table->string('title',33)->nullable();
            $table->float('genre_ids3',11)->nullable();
            $table->string('video')->nullable();
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
        Schema::dropIfExists('mytable');
    }
};

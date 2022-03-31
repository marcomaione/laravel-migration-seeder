<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            //,prezzo
            $table->string('destination', 100);
            $table->string('departure', 50);
            $table->string('period', 50);
            $table->string('stay length', 50);
            $table->date('departure_date');
            $table->date('check_in_date');
            $table->string('accommodation', 100);
            $table->decimal('price',8,2);

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
        Schema::dropIfExists('travels');
    }
}

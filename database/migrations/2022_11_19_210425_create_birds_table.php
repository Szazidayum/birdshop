<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Bird;

class CreateBirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birds', function (Blueprint $table) {
            $table->id();
            $table->string('name', 32)->unique();
            $table->integer('price');
            $table->integer('age');
            $table->integer('quantity');
            $table->timestamps();
        });

        Bird::create(['name'=>'Rózsás kakadu','price'=>250000, 'age'=>40, 'quantity'=>20]);
        Bird::create(['name'=>'Sárgabóbitás kakadu','price'=>200000, 'age'=>40, 'quantity'=>16]);
        Bird::create(['name'=>'Nimfapapagáj','price'=>20000, 'age'=>20, 'quantity'=>33]);
        Bird::create(['name'=>'Jákópapagáj','price'=>320000, 'age'=>80, 'quantity'=>21]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('birds');
    }
}

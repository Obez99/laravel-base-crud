<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Comic;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string("title", 50)->nullable(false);
            $table->text("description");
            $table->text("thumb");
            $table->float("price", 6, 2);
            $table->string("series", 100);  //Should be foreign key
            $table->date("sale_date");
            $table->string("type", 50); //Should be foreign key
            $table->$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}

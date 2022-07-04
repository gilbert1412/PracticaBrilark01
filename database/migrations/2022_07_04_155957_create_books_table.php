<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_editorial');
            $table->string('name')->nullable();
            $table->string('author')->nullable();
            //$table->string('ideditorial')->nullable();
            $table->date('yearPublication')->nullable();
            $table->enum('status',[1,2])->default(1);
            $table->timestamps();

            /* relaciones*/
            $table->foreign("id_editorial")
                ->references("id")
                ->on("editorial")
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}

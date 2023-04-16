<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTableGclq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('Books', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->string('title', 250);
			$table->string('cover', 250);
			$table->string('author', 250);
			$table->integer('stock');
			$table->bigInteger('category_id')->unsigned();
			$table->bigInteger('publisher_id')->unsigned();
			$table->bigInteger('bookshelfs_id')->unsigned();
			$table->timestamps();
        });

        Schema::table('Books', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict')->onUpdate('no action');
			$table->foreign('publisher_id')->references('id')->on('publishers')->onDelete('restrict')->onUpdate('no action');
			$table->foreign('bookshelfs_id')->references('id')->on('bookhelves')->onDelete('restrict')->onUpdate('no action');
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Books');
    }
}

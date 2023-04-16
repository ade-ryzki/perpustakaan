<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTableTkiu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('Transactions', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->date('borrow_date');
			$table->date('return_date');
			$table->bigInteger('book_id')->unsigned();
			$table->bigInteger('user_id')->unsigned();
			$table->timestamps();
        });

        Schema::table('Transactions', function (Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')->onDelete('restrict')->onUpdate('no action');
			$table->foreign('user_id')->references('id')->on('publishers')->onDelete('restrict')->onUpdate('no action');
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
        Schema::dropIfExists('Transactions');
    }
}

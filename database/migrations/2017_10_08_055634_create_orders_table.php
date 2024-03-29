<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('category_id');
            $table->integer('employee_id')->nullable();
            $table->dateTime('expiry_date');
            $table->string('status')->nullable();
            $table->string('payment_status')->nullable();
            $table->float('cost', 8, 2);
            $table->text('instructions');
            $table->string('file')->nullable();
            $table->string('title');
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
        Schema::dropIfExists('orders');
    }
}

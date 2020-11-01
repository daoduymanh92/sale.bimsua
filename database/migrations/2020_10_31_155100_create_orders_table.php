<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->tinyInteger('gender')->default(0)->comment('0: chưa xác định, 1: trai, 2: gái');
            $table->string('address')->nullable();
            $table->tinyInteger('payment_method')->default(0)->comment('0: COD, 1: Banking');
            $table->tinyInteger('delevery_status')->default(0)->comment('0: Đã xác nhận đơn, 1: Đã giao hàng, 2: Hoàn hàng');
            $table->string('information')->nullable();
            $table->integer('total')->nullable();
            $table->string('facebook')->nullable();
            $table->string('note')->nullable();
            $table->integer('order_by')->nullable();
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

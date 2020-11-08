<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFields1107ToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->tinyInteger('ship_discount')->default(0)->comment('0: Khách trả, 1: Miễn phí');
            $table->tinyInteger('order_type')->default(0)->comment('0:Tạo đơn, 1: Chăm sóc tiếp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['ship_discount', 'order_type']);
        });
    }
}

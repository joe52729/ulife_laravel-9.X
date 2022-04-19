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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('o_id')
                ->primary()
                ->comment('訂單序號');
            $table->string('goods_id')
                ->comment('貨物編號');
            $table->string('goods_name')
                ->comment('商品名稱');
            $table->string('buyer_acc')
                ->comment('買家帳號');
            $table->string('buyer_name')
                ->comment('買家名稱');
            $table->string('seller_acc')
                ->comment('賣家帳號');
            $table->string('seller_name')
                ->comment('賣家名稱');
            $table->integer('goods_amount')
                ->comment('數量');
            $table->integer('goods_price')
                ->comment('單價');
            $table->integer('total_price')
                ->comment('總價');
            $table->string('status')
                ->comment('訂單狀態');
            $table->dateTime('order_Time')
                ->comment('下標時間');
            $table->dateTime('shipping_Time')
                ->comment('出貨時間')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

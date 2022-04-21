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
        Schema::create('goods', function (Blueprint $table) {
            //$table->id()->unique();
            $table->primary('goods_id', 20)
                ->comment('貨物ID');
            $table->string('goods_num', 20)
                ->comment('貨物編號');
            $table->string('goods_name', 20)
                ->comment('商品名稱');
            $table->string('owner')
                ->comment('擁有者');
            $table->string('goods_descript', 100)
                ->comment('商品描述');
            $table->integer('goods_amount', 30)
                ->comment('商品數量');
            $table->string('goods_price', 30)
                ->comment('貨物單價');
            $table->dateTime('created_at')
                ->commnet('上架時間');
            $table->date('updated_at')
                ->commnet('最後更新時間')
                ->nullable();
            $table->rememberToken();
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

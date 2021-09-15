<?php

use App\Enums\CheckoutStatus;
use App\Enums\OrderStatus;
use App\Enums\Status;
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
            $table->integer('user_id')->nullable();
            $table->double('total_price');
            $table->string('order_code');
            $table->string('ship_phone');
            $table->string('ship_name');
            $table->string('ship_email');
            $table->string('ship_address');
            $table->string('note')->nullable();
            $table->integer('is_checkout')->default(CheckoutStatus::UNPAID);
            $table->integer('status')->default(OrderStatus::Create);
            $table->timestamps();
            $table->softDeletes();
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

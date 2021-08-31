<?php

use App\Enums\CheckoutStatus;
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
            $table->integer('users_id');
            $table->double('total_price');
            $table->string('users_name');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('note');
            $table->integer('is_checkout')->default(CheckoutStatus::UNPAID);
            $table->integer('status')->default(Status::ACTIVE);
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

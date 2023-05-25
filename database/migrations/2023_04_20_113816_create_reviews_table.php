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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('users')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->unsignedBigInteger('assistant_id');
            $table->foreign('assistant_id')->references('id')->on('assistants')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->date('reviewDate');
            $table->string('reviewContent');
            $table->float('rating')->nullable();
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
        Schema::dropIfExists('reviews');
    }
};

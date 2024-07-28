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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id'); //customer_id
            $table->string('name' , 30);
            $table->string('email' , 30);
           // $table->integer('customer_phone' , 30);
            $table->text('address' , 30);
//$table->string('customer_city' , 30);
            $table->date('date_of_birth');
            $table->enum('gender',["M","F","O"])->nullable();
//$table->string('customer_image')->nullable();
            $table->string('password');
            $table->integer('points');
            $table->boolean('status')->default(1);
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
};

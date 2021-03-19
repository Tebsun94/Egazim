<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_order', function (Blueprint $table) {
           
            $table->uuid('id')->primary();
           
            $table->string('createdAt');
            $table->string('status');
            $table->decimal('discount');
            $table->decimal('subTotalCost');
            $table->decimal('totalCost');
           
            $table->boolean('isVatInclusive');
            $table->decimal('vatAmount');
            $table->string('vatPercentage');
        
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
        Schema::dropIfExists('sales_order');
    }
}

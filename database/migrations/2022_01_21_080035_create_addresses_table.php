<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('address_type_id')->unsigned()->nullable();
              // $table->foreign('address_type_id')->references('id')->on('mas_address_types')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('company_id')->unsigned()->nullable();
              // $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
             $table->string('office_no')->nullable();
             $table->string('street_no')->nullable();
             $table->string('country')->nullable();
             $table->string('state')->nullable();
             $table->string('city')->nullable();
             $table->string('postal_code')->nullable();
             $table->string('vat')->nullable();
             $table->string('inco_terms')->nullable();
             $table->string('inco_city')->nullable();
             $table->text('text')->nullable();
             $table->text('description')->nullable();
             $table->string('created_by')->nullable();//actualy the are user this tme pass null val
             $table->string('updated_by')->nullable();//actualy the are user this tme pass null val
             $table->tinyInteger('is_active')->default('1');
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
        Schema::dropIfExists('addresses');
    }
}

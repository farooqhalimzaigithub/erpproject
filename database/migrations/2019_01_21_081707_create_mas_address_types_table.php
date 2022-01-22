<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasAddressTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mas_address_types', function (Blueprint $table) {
             $table->increments('id');
               $table->string('address_type_name')->nullable();
               $table->string('short_name')->nullable();
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
        Schema::dropIfExists('mas_address_types');
    }
}

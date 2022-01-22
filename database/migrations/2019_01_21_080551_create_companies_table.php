<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
               $table->increments('id');
               $table->string('company_name')->nullable();
               $table->string('company_type')->nullable();
               $table->string('official_email')->nullable();
               $table->string('fax_num')->nullable();
               $table->string('official_phone')->nullable();
               $table->string('official_mobile')->nullable();
               $table->string('website_address')->nullable();
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
        Schema::dropIfExists('companies');
    }
}

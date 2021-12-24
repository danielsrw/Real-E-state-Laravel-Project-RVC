<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_services', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('p_name')->nullable();
            $table->string('p_email')->nullable();
            $table->string('p_phone')->nullable();
            $table->string('p_upi')->nullable();
            $table->string('p_address')->nullable();
            $table->string('p_institution')->nullable();
            $table->string('p_description')->nullable();
            $table->string('i_name')->nullable();
            $table->string('i_applicant')->nullable();
            $table->string('i_address')->nullable();
            $table->string('i_upi')->nullable();
            $table->string('i_client_name')->nullable();
            $table->string('i_client_address')->nullable();
            $table->string('i_purpose')->nullable();
            $table->text('i_description')->nullable();
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
        Schema::dropIfExists('request_services');
    }
}

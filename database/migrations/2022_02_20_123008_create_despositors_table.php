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
        Schema::create('despositors', function (Blueprint $table) {
            $table->id();
            $table->string("depositor_name")->nullable();
            $table->string("next_of_kin")->nullable();
            $table->string("kin_address")->nullable();
            $table->string("description")->nullable();
            $table->string("date_issued")->nullable();
            $table->string("due_date")->nullable();
            $table->string("monthly_charges")->nullable();
            $table->string("storage_charges")->nullable();
            $table->string("code");
            $table->string("status")->nullable();
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
        Schema::dropIfExists('despositors');
    }
};

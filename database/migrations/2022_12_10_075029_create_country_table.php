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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
			$table->string('name')->nullable();
			$table->string('alpha2Code')->nullable();
			$table->string('alpha3Code')->nullable();
			$table->string('callingCode')->nullable();
			$table->string('currencyCode')->nullable();
			$table->string('numericCode')->nullable();
			$table->string('currencyName')->nullable();
			$table->string('currencySymbol')->nullable();
			$table->unsignedBigInteger('created_by')->nullable();
			$table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('countries');
    }
};

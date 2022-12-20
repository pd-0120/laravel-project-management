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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
			$table->string('description', 250);
			$table->integer('project_id');
			$table->integer('user_id');
			$table->date('date');
			$table->string('time', 10,2)->default("00.00");
			$table->boolean('is_billable')->default(0);
			$table->boolean('is_paid')->default(0);
			$table->boolean('is_invoice_listed')->default(0);
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
        Schema::dropIfExists('tasks');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppoinmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoinments', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('time');
            $table->string('status');

            $table->foreignId('user_id')
                        ->constrained()
                        ->onUpdate('cascade')
                        ->onDelete('cascade');

            $table->foreignId('doctor_id')
                        ->constrained()
                        ->onUpdate('cascade')
                        ->onDelete('cascade');

            $table->foreignId('prescription_id')
                        ->nullable()
                        ->constrained()
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
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
        Schema::dropIfExists('appoinments');
    }
}

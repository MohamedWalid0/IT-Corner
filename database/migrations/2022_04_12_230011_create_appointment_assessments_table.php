<?php

use App\Models\Appointment;
use App\Models\Assessment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_assessments', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Assessment::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');


            $table->foreignIdFor(Appointment::class)
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
        Schema::dropIfExists('assessment_patients');
    }
}

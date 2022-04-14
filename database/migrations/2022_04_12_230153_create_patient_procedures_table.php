<?php

use App\Models\Patient;
use App\Models\Procedure;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientProceduresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_procedures', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Patient::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignIdFor(Procedure::class)
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
        Schema::dropIfExists('patient_procedures');
    }
}

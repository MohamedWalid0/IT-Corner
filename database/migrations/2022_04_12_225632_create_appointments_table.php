<?php

use App\Models\Day;
use App\Models\Patient;
use App\Models\VisitType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();


            $table->foreignIdFor(Patient::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignIdFor(VisitType::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreignIdFor(Day::class)
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->time('start_time');
            $table->time('end_time');


            $table->softDeletes();
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
        Schema::dropIfExists('appointments');
    }
}

<?php

use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Appointment::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignIdFor(Patient::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');



            $table->decimal('total_fees')->default(0);

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
        Schema::dropIfExists('bills');
    }
}

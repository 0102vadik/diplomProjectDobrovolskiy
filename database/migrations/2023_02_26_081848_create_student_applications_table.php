<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_applications', function (Blueprint $table) {
            $table->id('id_application');
            $table->bigInteger('id_student')->unsigned();
            $table->bigInteger('id_company')->unsigned();
            $table->string('header',255);
            $table->text('message');
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_student')
                ->references('id_student')
                ->on('student_infos')
                ->onUpdate('cascade');

            $table->foreign('id_company')
                ->references('id_company')
                ->on('company_infos')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_applications');
    }
};

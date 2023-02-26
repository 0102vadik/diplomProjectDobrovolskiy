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
        Schema::create('course_users', function (Blueprint $table) {
            $table->bigInteger('id_student')->unsigned();
            $table->bigInteger('id_course')->unsigned();
            $table->timestamps();

            $table->primary(['id_student','id_course']);

            $table->foreign('id_student')
                ->references('id_student')
                ->on('student_infos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_course')
                ->references('id_course')
                ->on('announcements_from_companies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_users');
    }
};

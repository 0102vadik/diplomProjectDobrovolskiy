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
        Schema::create('student_languages', function (Blueprint $table) {
            $table->bigInteger('id_student')->unsigned();
            $table->bigInteger('id_language')->unsigned();

            $table->primary(['id_student','id_language']);

            $table->foreign('id_student')
                ->references('id_student')
                ->on('student_infos')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_language')
                ->references('id_language')
                ->on('programming_languages')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_languages');
    }
};

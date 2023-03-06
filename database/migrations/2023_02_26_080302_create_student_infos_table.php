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
        Schema::create('student_infos', function (Blueprint $table) {
            $table->bigInteger('id_student')->unsigned();
            $table->string('name');
            $table->string('surname');
            $table->string('patronymic');
            $table->integer('course');
            $table->string('group');
            $table->text('description')->nullable();
            $table->string('photo_src')->nullable();
            $table->timestamps();

            $table->primary('id_student');

            $table->foreign('id_student','student_infos_users')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_infos');
    }
};

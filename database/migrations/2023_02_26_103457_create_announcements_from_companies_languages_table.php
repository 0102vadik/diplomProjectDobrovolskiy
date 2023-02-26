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
        Schema::create('announcements_from_companies_languages', function (Blueprint $table) {
            $table->bigInteger('id_course')->unsigned();
            $table->bigInteger('id_language')->unsigned();
            $table->timestamps();

            $table->primary(['id_course','id_language']);

            $table->foreign('id_course')
                ->references('id_course')
                ->on('announcements_from_companies')
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
        Schema::dropIfExists('announcements_from_companies_languages');
    }
};

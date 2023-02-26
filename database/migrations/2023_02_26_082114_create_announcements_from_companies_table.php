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
        Schema::create('announcements_from_companies', function (Blueprint $table) {
            $table->id('id_course');
            $table->bigInteger('id_author')->unsigned();
            $table->string('header');
            $table->text('description');
            $table->date('expectation_date');
            $table->string('type');
            $table->timestamps();

            $table->foreign('id_author')
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
        Schema::dropIfExists('announcements_from_companies');
    }
};

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
        Schema::create('company_infos', function (Blueprint $table) {
            $table->bigInteger('id_company')->unsigned();
            $table->string('company_name');
            $table->text('description')->nullable();
            $table->string('phone_contact');
            $table->string('city')->nullable();
            $table->string('logo_src')->nullable();
            $table->timestamps();

            $table->primary('id_company');

            $table->foreign('id_company')
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
        Schema::dropIfExists('company_infos');
    }
};

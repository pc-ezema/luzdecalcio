<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventions', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('groupleadername')->nullable();
            $table->string('fullname')->nullable();
            $table->string('groupnumber')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('age')->nullable();
            $table->string('level')->nullable();
            $table->string('citystate')->nullable();
            $table->string('country')->nullable();
            $table->string('projectname')->nullable();
            $table->string('difference')->nullable();
            $table->string('importance')->nullable();
            $table->string('patent')->nullable();
            $table->string('registered')->nullable();
            $table->string('workingdetails')->nullable();
            $table->string('cost')->nullable();
            $table->string('file')->nullable();
            $table->string('file2')->nullable();
            $table->string('file3')->nullable();
            $table->string('file4')->nullable();
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
        Schema::dropIfExists('inventions');
    }
};

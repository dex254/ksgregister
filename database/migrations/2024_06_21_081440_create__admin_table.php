<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
           
            $table->integer('Userid')->primary();
            $table->string("name")->nullable();
            $table->string("password")->nullable();
            $table->string("role")->nullable();
            $table->date("date")->nullable();
            $table->string("email")->unique();
            $table->string('National_id')->nullable(); // Allow 'Userid' to be nullable or set a default value if required
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
        Schema::dropIfExists('admin');
    }
}

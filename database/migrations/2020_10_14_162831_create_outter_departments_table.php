<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutterDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outter_departments', function (Blueprint $table) {
            $table->increments("id");
            $table->string("category")->nullable();//وزارة " مؤسسة " ..
            $table->string("office_manager")->nullable();
            $table->string("address")->nullable();
            $table->string("email")->nullable();
            $table->integer("department_id")->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outter_departments');
    }
}

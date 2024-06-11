<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentTable extends Migration
{
    public function up()
    {
        Schema::create('equipment', function (Blueprint $table) {
            $table->id('equipment_id'); // Auto-incrementing primary key
            $table->string('equipment_name');
            $table->string('serial_number')->nullable();
            $table->timestamp('first_service')->nullable();
            $table->timestamp('second_service')->nullable();
            $table->timestamp('third_service')->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('year_made')->nullable();
            $table->integer('year_installed')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('equipment');
    }
};

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
        Schema::create('addp', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pname');
            $table->string('pprice');
            $table->string('sprice');
            $table->string('quantites');
            $table->string('image');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addp');
    }
};

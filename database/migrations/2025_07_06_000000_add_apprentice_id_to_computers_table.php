<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('computers', function (Blueprint $table) {
            $table->unsignedBigInteger('apprentice_id')->unique()->after('id');
            $table->foreign('apprentice_id')->references('id')->on('apprentices')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('computers', function (Blueprint $table) {
            $table->dropForeign(['apprentice_id']);
            $table->dropColumn('apprentice_id');
        });
    }
};

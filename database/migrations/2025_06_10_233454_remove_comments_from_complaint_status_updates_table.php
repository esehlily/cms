<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('complaint_status_updates', function (Blueprint $table) {
            $table->dropColumn('comments');
        });
    }

    public function down()
    {
        Schema::table('complaint_status_updates', function (Blueprint $table) {
            $table->text('comments')->nullable();
        });
    }
};

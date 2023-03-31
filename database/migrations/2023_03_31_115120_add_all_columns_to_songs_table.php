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
        Schema::table('songs', function (Blueprint $table) {
            $table->string('title');
            $table->string('album');
            $table->string('author');
            $table->string('editor');
            $table->decimal('length', $precision = 3, $scale = 2);
            $table->src('poster');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('songs', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('album');
            $table->dropColumn('author');
            $table->dropColumn('editor');
            $table->dropColumn('length');
            $table->dropColumn('poster');
        });
    }
};

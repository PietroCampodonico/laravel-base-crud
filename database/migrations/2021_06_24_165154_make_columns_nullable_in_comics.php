<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeColumnsNullableInComics extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title', 150)->nullable()->change();
            $table->longText('description')->nullable()->change();
            $table->text('thumb')->nullable()->change();
            $table->decimal('price', 6, 2)->nullable()->change();
            $table->string('series', 25)->nullable()->change();
            $table->date('sale_date')->nullable()->change();
            $table->string('type', 25)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title', 150)->nullable(false)->change();
            $table->longText('description')->nullable(false)->change();
            $table->text('thumb')->nullable(false)->change();
            $table->decimal('price', 6, 2)->nullable(false)->change();
            $table->string('series', 25)->nullable(false)->change();
            $table->date('sale_date')->nullable(false)->change();
            $table->string('type', 25)->nullable(false)->change();
        });
    }
}

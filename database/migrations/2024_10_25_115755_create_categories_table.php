<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Insert default categories
        DB::table('categories')->insert([
            ['name' => 'Soul'],
            ['name' => 'Ambient'],
            ['name' => 'Pop'],
            ['name' => 'Rap'],
            ['name' => 'Funk'],
            ['name' => 'Rock'],
            ['name' => 'Reggae / Dub'],
            ['name' => 'Techno'],
            ['name' => 'Electro'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

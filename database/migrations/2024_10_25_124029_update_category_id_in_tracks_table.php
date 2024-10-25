<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateCategoryIdInTracksTable extends Migration
{
    public function up()
    {
        // Ensure there are at least 9 categories
        $categoriesCount = DB::table('categories')->count();
        if ($categoriesCount < 9) {
            for ($i = $categoriesCount + 1; $i <= 9; $i++) {
                DB::table('categories')->insert(['name' => 'Category ' . $i]);
            }
        }

        // Update all category_id values with random values between 1 and 9
        DB::table('tracks')->get()->each(function ($track) {
            $randomCategoryId = rand(1, 9);
            DB::table('tracks')->where('id', $track->id)->update(['category_id' => $randomCategoryId]);
        });
    }

    public function down()
    {
        // Optionally, you can revert the changes here if needed
    }
}

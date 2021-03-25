<?php

use App\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        Categories::create(['nom' => 'Video']);
        Categories::create(['nom' => 'Documents']);
    }
}

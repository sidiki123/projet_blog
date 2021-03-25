<?php

use App\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::truncate();

        DB::table('regions')->delete();

        Region::create(['nom' => 'Centre']);
        Region::create(['nom' => 'Hauts-Bassins']);
        Region::create(['nom' => 'Centre-Ouest ']);
        Region::create(['nom' => 'Cascades']);
        Region::create(['nom' => 'Centre-Est']);
        Region::create(['nom' => 'Plateau-Central ']);
    }
}

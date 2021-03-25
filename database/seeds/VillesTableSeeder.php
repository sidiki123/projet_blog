<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Ville;

class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('villes')->delete();

        Ville::create(['nom' => 'Ouagadougou', 'region_id' => '1']);
        Ville::create(['nom' => 'Banfora', 'region_id' => '4']);
        Ville::create(['nom' => 'Sindou', 'region_id' => '4']);
        Ville::create(['nom' => 'Koudougou', 'region_id' => '3']);
        Ville::create(['nom' => 'Léo', 'region_id' => '3']);
        Ville::create(['nom' => 'Réo', 'region_id' => '3']);
        Ville::create(['nom' => 'Sapouy', 'region_id' => '3']);
        Ville::create(['nom' => 'Bobo Dioulasso', 'region_id' => '2']);
        Ville::create(['nom' => 'Orodara', 'region_id' => '2']);
        Ville::create(['nom' => 'Houndé', 'region_id' => '2']);
        Ville::create(['nom' => 'Zorgho', 'region_id' => '6']);
        Ville::create(['nom' => 'Boussé', 'region_id' => '6']);
        Ville::create(['nom' => 'Ziniaré', 'region_id' => '6']);
        Ville::create(['nom' => 'Tenkodogo', 'region_id' => '5']);
        Ville::create(['nom' => 'Ouargaye', 'region_id' => '5']);
        Ville::create(['nom' => 'Koupéla', 'region_id' => '5']);
    }
}

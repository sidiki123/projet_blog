<?php

use App\Formation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->delete();

        Formation::create(['nom_formation' => 'TUTORIELS ', 'type_de_formation_id' => '1']);
        Formation::create(['nom_formation' => 'PDF et POWERPOINT ', 'type_de_formation_id' => '2']);
    }
}

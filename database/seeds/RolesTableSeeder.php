<?php

use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role::truncate();

        DB::table('roles')->delete();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'technicien']);
        Role::create(['name' => 'abonne ']);
    }
}

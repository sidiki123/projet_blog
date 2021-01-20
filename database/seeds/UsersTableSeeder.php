<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        DB::table('users')->delete();


        DB::table('role_user')->delete();
        DB::table('posts')->delete();

        $admin= User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $technicien= User::create([
            'name'=>'technicien',
            'email'=>'technicien@technicien.com',
            'password' => Hash::make('password')
        ]);

        $abonne= User::create([
            'name'=>'abonne',
            'email'=>'abonne@abonne.com',
            'password' => Hash::make('password')
        ]);

        $adminRole = Role::where('name','admin')->first();
        $technicienRole = Role::where('name','technicien')->first();
        $abonneRole = Role::where('name','abonne')->first();

        $admin->roles()->attach($adminRole);
        $technicien->roles()->attach($technicienRole);
        $abonne->roles()->attach($abonneRole);
    }
}

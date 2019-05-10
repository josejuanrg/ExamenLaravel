<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['rol' => 'admin'],
            ['rol' => 'user']
        ];
        DB::table('roles')->insert($roles);
    }
}

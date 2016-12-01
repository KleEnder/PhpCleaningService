<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /*
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Klemen',
            'role_id' => '1',
            'email' => 'nekaj@test.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Fido',
            'role_id' => '2',
            'email' => 'nekaj2@test.com',
            'password' => bcrypt('secret2'),
        ]);
        */
        DB::table('role')->insert([
            'role_id' => '1',
            'alias' => 'Admin',
        ]);

        DB::table('role')->insert([
            'role_id' => '2',
            'alias' => 'User',
        ]);
    }
}

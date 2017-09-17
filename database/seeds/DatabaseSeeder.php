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

        App\Role::insert([
            ['name' =>  'Admin'],
            ['name' =>  'Designer'],
            ['name' =>  'Buyer'],
        ]);

        App\User::create([
            'role_id'   =>  1,
            'name'      =>  'adminputri',
            'email'     =>  'damayartdesign@gmail.com',
            'password'  =>  bcrypt('Damayput200895')
        ]);
    }
}

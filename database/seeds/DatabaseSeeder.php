<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        DB::table('users')->insert([
            'username' => 'Barry Blue Jeans II',
            'email' => 'mail@mail.com',
            'password' => bcrypt('password'),    
        ]);
        Model::reguard();
    }
}

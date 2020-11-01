<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'osman',
            'email' => 'osmanforhad93@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    } //end of the run method

} //end of the UserSeeder class
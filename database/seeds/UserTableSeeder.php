<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Elvin',
            'email' => 'elvinsomon2001@gmail.com',
            'password' => bcrypt('123456789')
        ]);

        factory(User::class, 10) ->create();
    }
}

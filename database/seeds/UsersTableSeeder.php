<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
		$user->name = "Jhon D";
		$user->email = "jdoe@localhost.com";
		$user->password = bcrypt('secret');
		$user->save();
    }
}

<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {

	public function run() {

		DB::table('users')->delete();

		$users = [
			['name' => 'ryan', 'email' => 'ryan@ryanrampersad.com', 'password' => Hash::make('admin')]
		];

		DB::table('users')->insert($users);

	}

}

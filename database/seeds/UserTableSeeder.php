<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 		=> 'Admin',
				'last_name' => 'admin',
				'email' 	=> 'admin@gmail.com',
				'user' 		=> 'admin',
				'password' 	=> \Hash::make('admin'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'tarapoto, ucp',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Sheyla',
				'last_name' => 'Tello',
				'email' 	=> 'sheyla@gmail.com',
				'user' 		=> 'sheyla',
				'password' 	=> \Hash::make('sheyla'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'Jr. tacna, S/N',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}

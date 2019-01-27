<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\User::insert([
            [
              'id'  			=> 1,
              'name'  			=> 'Admin KMI',
              'username'		=> 'admin@kmi-its.com',
              'email' 			=> 'admin@kmi-its.com',
              'password'		=> bcrypt('Bismillah123!'),
              'gambar'			=> 'kmi.png',
              'level'			=> 'admin',
              'remember_token'	=> NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
                        [
              'id'        => 2,
              'name'        => 'Anggota KMI',
              'username'    => 'anggota',
              'email'       => 'anggota@kmi-its.com',
              'password'    => bcrypt('Anggota123!'),
              'gambar'      => NULL,
              'level'     => 'user',
              'remember_token'  => NULL,
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}

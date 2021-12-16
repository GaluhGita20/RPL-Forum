<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'file' => 'profil-default.jpg',
            ],

            [
                'name' => 'Galuh Gita',
                'email' => 'galuhgita@gmail.com',
                'password' => Hash::make('gitacute'),
                'file' => 'profil-default.jpg',
            ],

            [
                'name' => 'Bagus Prayogo',
                'email' => 'bagusprayogo@gmail.com',
                'password' => Hash::make('bagus123'),
                'file' => 'profil-default.jpg',
            ],

            [
                'name' => 'Gede Rico',
                'email' => 'gederico@gmail.com',
                'password' => Hash::make('grico123'),
                'file' => 'profil-default.jpg',
            ],

            [
                'name' => 'Ananda Permana',
                'email' => 'ananda@gmail.com',
                'password' => Hash::make('nanda123'),
                'file' => 'profil-default.jpg',
            ],

            [
                'name' => 'Dedens',
                'email' => 'dedens@gmail.com',
                'password' => Hash::make('deden123'),
                'file' => 'profil-default.jpg',
            ],

            [
                'name' => 'Carlo',
                'email' => 'carlo@gmail.com',
                'password' => Hash::make('carlo123'),
                'file' => 'profil-default.jpg',
            ],
        ]);
    }
}

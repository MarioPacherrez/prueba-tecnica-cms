<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Jenssegers\Mongodb\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'       => 'Mario Pacherrez',
            'email'      => 'mariopacherrez@gmail.com',
            'password'   => Hash::make('mario123xyz'),
        ]);
        User::create([
            'name'       => 'Diego',
            'email'      => 'diego@gmail.com',
            'password'   => Hash::make('diego123xyz'),
        ]);
        User::create([
            'name'       => 'Carlos',
            'email'      => 'carlos@gmail.com',
            'password'   => Hash::make('carlos123xyz'),
        ]);
        User::create([
            'name'       => 'Enrique',
            'email'      => 'enrique@gmail.com',
            'password'   => Hash::make('enrique123xyz'),
        ]);
        User::create([
            'name'       => 'Erika',
            'email'      => 'erika@gmail.com',
            'password'   => Hash::make('erika123xyz'),
        ]);
    }
}
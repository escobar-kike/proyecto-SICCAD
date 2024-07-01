<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::deleteDirectory('prueba');;

        Storage::makeDirectory('prueba');

        $this->call(RoleSeeder::class);


        User::create([
            'name' => 'Gari Amin Juan Jose',
            'email' => 'gariamin21@gmail.com',
            'password' => bcrypt('12345678')

        ])->assignRole('Super Administrador');

        User::factory(19)->create();


       // Storage::makeDirectory('fotoprincipal');
         //\App\Models\User::factory(100)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

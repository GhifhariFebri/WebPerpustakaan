<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Librarian',
            'email' => 'librarian@gmail.com',
            'password' => Hash::make('Password123'),
            'role' => 'librarian',
        ]);

        User::factory()->create([
            'name' => 'Member',
            'email' => 'member@gmail.com',
            'password' => Hash::make('Password123'),
            'role' => 'members',
        ]);

        Kategori::factory()->create([
            'nama' => 'Horror',
        ]);
        Kategori::factory()->create([
            'nama' => 'Romansa',
        ]);
        Kategori::factory()->create([
            'nama' => 'Action',
        ]);
    }
}

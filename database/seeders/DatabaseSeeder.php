<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat 10 pengguna menggunakan factory
        User::factory(10)->create();

        // Membuat pengguna khusus (Admin Kedai)
        User::factory()->create([
            'name' => 'Bos Muda',
            'email' => 'warkop@gmail.com',
            'password' => Hash::make('456'), // Pastikan password aman
            'roles' => 'admin'
        ]);

        $this->call([ProductSeeder::class
    ]);
    }
}

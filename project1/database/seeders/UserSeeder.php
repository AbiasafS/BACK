<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Abiasaf',
            'email' => 'salazarabiasaf@gmail.com',
            'password' => bcrypt('12345678'),
            'id_number' => '1234567890',
            'phone' => '0987654321',
            'address' => '123 Main St, City, Country',
        ])->assignRole('Doctor');
    }
}

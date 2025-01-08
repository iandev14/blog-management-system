<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::factory()->create(['role' => 'admin']);
        User::factory(5)->create(['role' => 'author']);
        User::factory(10)->create(['role' => 'viewer']);
    }
}

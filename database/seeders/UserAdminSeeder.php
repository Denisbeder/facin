<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'deactivated' => 1,
            'name' => 'Denisbeder',
            'email' => 'denisbeder@gmail.com',
            'password' => 'ddc010',
        ]);
    }
}

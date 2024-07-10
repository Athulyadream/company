<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $users = [
            ['name' => 'jhon due', 'Fk_department' => 1, 'Fk_designation' => 1],
            ['name' => 'tommy mark', 'Fk_department' => 2, 'Fk_designation' => 2],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}

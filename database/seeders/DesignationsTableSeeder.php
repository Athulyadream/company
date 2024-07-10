<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Designation;
class DesignationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $designations = [
            ['name' => 'Marketing Manager'],
            ['name' => 'Mobile application dev'],
        ];

        foreach ($designations as $designation) {
            Designation::create($designation);
        }
    }
}

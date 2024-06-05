<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'name' => 'Task 1',
            'deadline' => '2024-01-01',
            'status' => 'belum dikerjakan',
            'description' => 'Task 1 description',
        ]);

        Task::factory('5')->create();
    }
}

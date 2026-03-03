<?php

namespace Database\Seeders;

use App\Models\Leadership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeadershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainings = [
            'Basic Leadership Training',
            'Advanced Management Course',
            'Strategic Decision Making Workshop',
            'Team Building Facilitation',
            'Conflict Management Seminar',
        ];

        foreach ($trainings as $training) {
            Leadership::create([
                'title' => $training,
                'description' => 'Comprehensive training module for ' . $training,
                'type' => 'Training',
                'date' => now()->addDays(rand(1, 30)),
            ]);
        }
    }
}

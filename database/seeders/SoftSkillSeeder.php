<?php

namespace Database\Seeders;

use App\Models\SoftSkill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoftSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            'Communication',
            'Teamwork',
            'Problem Solving',
            'Time Management',
            'Critical Thinking',
            'Decision Making',
            'Stress Management',
            'Adaptability',
            'Conflict Resolution',
            'Leadership',
        ];

        foreach ($skills as $skill) {
            SoftSkill::create([
                'name' => $skill,
                'description' => 'Description for ' . $skill,
            ]);
        }
    }
}

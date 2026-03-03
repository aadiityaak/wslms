<?php

namespace Database\Seeders;

use App\Models\TalentPool;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TalentPoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            TalentPool::create([
                'user_id' => $user->id,
                'status' => 'Potential',
                'comments' => 'High potential employee, shows great leadership skills.',
                'rating' => rand(3, 5),
            ]);
        }
    }
}

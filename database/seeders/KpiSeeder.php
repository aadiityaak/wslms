<?php

namespace Database\Seeders;

use App\Models\Kpi;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KpiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            Kpi::create([
                'user_id' => $user->id,
                'metric' => 'Monthly Sales',
                'value' => rand(80, 120),
                'target' => 100,
                'period' => 'January 2026',
            ]);

            Kpi::create([
                'user_id' => $user->id,
                'metric' => 'Customer Satisfaction',
                'value' => rand(4, 5),
                'target' => 5,
                'period' => 'January 2026',
            ]);
        }
    }
}

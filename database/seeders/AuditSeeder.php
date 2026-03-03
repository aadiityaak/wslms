<?php

namespace Database\Seeders;

use App\Models\Audit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        if ($user) {
            for ($i = 1; $i <= 5; $i++) {
                Audit::create([
                    'user_id' => $user->id,
                    'title' => 'Internal Audit Q' . $i,
                    'description' => 'Routine internal audit for quarter ' . $i,
                    'audit_date' => now()->subMonths($i),
                    'status' => 'completed',
                    'findings' => json_encode(['finding_1' => 'Minor issue found', 'finding_2' => 'All good']),
                ]);
            }
        }
    }
}

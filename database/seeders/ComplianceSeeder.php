<?php

namespace Database\Seeders;

use App\Models\Compliance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComplianceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $compliances = [
            'Health and Safety Regulation',
            'Data Privacy Policy',
            'Code of Conduct',
            'Anti-Harassment Policy',
            'IT Security Standards',
        ];

        foreach ($compliances as $compliance) {
            Compliance::create([
                'name' => $compliance,
                'description' => 'Standard compliance requirement for ' . $compliance,
                'valid_until' => now()->addYear(),
                'status' => 'active',
            ]);
        }
    }
}

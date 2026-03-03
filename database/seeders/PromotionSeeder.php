<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $positions = Position::take(2)->get();

        if ($user && $positions->count() >= 2) {
            Promotion::create([
                'user_id' => $user->id,
                'from_position_id' => $positions[0]->id,
                'to_position_id' => $positions[1]->id,
                'promotion_date' => now(),
                'reason' => 'Outstanding performance in the last quarter.',
            ]);
        }
    }
}

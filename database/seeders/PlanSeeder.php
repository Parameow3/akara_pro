<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Akara Premium',
                'slug' => 'akara-premium',
                'stripe_plan' => 'price_1OI2EqEUeLYggXQC4benqRme',
                'price' => 1.99,
                'description' => 'Business Plan'
            ],
            [
                'name' => 'Akara Student Pro',
                'slug' => 'akara-student-pro',
                'stripe_plan' => 'price_1OI2FSEUeLYggXQCPNyaVlCG',
                'price' => 0.99,
                'description' => 'Premium'
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}

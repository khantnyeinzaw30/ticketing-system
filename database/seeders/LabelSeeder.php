<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $labels = ["bug", "question", "enhancement"];

        foreach ($labels as $label) {
            Label::create([
                'name' => $label
            ]);
        }
    }
}

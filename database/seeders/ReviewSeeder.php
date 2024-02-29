<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        Review::factory(50)->create();
    }
}

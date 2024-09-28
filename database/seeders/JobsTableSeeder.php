<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;
use Faker\Generator as Faker;
use App\Functions\Helper;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 30; $i++) {
            $new_job = new Job();
            $new_job->title = $faker->sentence;
            $new_job->slug = Helper::generateSlug($faker->sentence, Job::class);
            $new_job->content = $faker->paragraph;
            $new_job->processing_time = $faker->numberBetween(1, 30);
            $new_job->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            \App\Model\Project::create([
                'name' => str_random(10),
                'info' => str_random(100),
                'company' => str_random(10),
                'logo' => '',
                'token' => 123456,
            ]);
        }
    }
}

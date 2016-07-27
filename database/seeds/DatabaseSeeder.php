<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventsTableSeeder::class);
    }
}

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++)
        {
            DB::table('events')->insert([[
                'email' => 'person@hotmail.com',
                'phonenumber' => '04'.rand(10, 90).rand(10, 90).rand(10, 90).rand(10, 90),
                'location' => 'Brugge street ' . $i,
                'date' => date('Y-m-d', strtotime("+".rand(30, 90)." days")),
                'start' => rand(12, 18).':'.rand(0, 60).':00',
                'end' => rand(19, 24).':'.rand(0, 60).':00',
            ]]);
        }
    }
}

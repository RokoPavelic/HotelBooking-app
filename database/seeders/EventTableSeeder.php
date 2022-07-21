<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([

            [
                'booking_id' => '0',
                'room_id' => '4',
                'event_date' => '2022-07-20 ',
                'event_name' => 'B-Day Celebration',
                'event_start' => '2022-07-20 20:00:00',
                'event_end' => '2022-07-21 20:00:00',
                'event_description' => '50th Birthday Barn Celebrtion'
            ],
            [
                'booking_id' => '1',
                'room_id' => '8',
                'event_date' => '2022-07-24',
                'event_name' => 'Wedding',
                'event_start' => '2022-07-24 20:00:00',
                'event_end' => '2022-07-24 23:00:00',
                'event_description' => 'Tropical Garden Wedding'
            ],
            [
                'booking_id' => '2',
                'room_id' => '6',
                'event_date' => '2022-07-24',
                'event_name' => 'Kids Party',
                'event_start' => '2022-07-24 20:00:00',
                'event_end' => '2022-07-24 23:00:00',
                'event_description' => 'Pond Party & Birthday Celebration'
            ],
        ]);
    }
}

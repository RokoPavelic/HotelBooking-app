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
                'room_id' => '8',
                'event_date' => '2022-07-31 ',
                'event_name' => 'Martina\'s Birthday Party',
                'event_start' => '2022-07-31 19:00:00',
                'event_end' => '2022-07-31 23:59:00',
                'event_description' => '50th Birthday Pond Celebrtion 20 guests'
            ],
            [
                'booking_id' => '1',
                'room_id' => '5',
                'event_date' => '2022-07-24',
                'event_name' => 'Main Hall Engagement Party',
                'event_start' => '2022-07-24 17:00:00',
                'event_end' => '2022-07-24 23:00:00',
                'event_description' => 'Close family celebration plus dinner'
            ],
            [
                'booking_id' => '2',
                'room_id' => '6',
                'event_date' => '2022-07-25',
                'event_name' => 'Breakfast BookClub',
                'event_start' => '2022-07-24 08:00:00',
                'event_end' => '2022-07-24 11:00:00',
                'event_description' => 'Monthy Barn BookClub'
            ],
        ]);
    }
}

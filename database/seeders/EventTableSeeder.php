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
                'booking_id'=> '0',
                'room_id'=> '4',
                'event_date'=> '2022-07-20 ',
                'event_name' => 'Meeting',
                'event_start' => '2022-07-20 20:00:00',
                'event_end' => '2022-07-21 20:00:00' ,
                'event_description'=> 'Summer wedding '
            ],
            [
                'booking_id'=> '1',
                'room_id'=> '6',
                'event_date'=> '2022-07-24',
                'event_name' => 'wedding',
                'event_start' => '2022-07-24 20:00:00',
                'event_end' => '2022-07-24 23:00:00' ,
                'event_description'=> 'nigh wedding '
            ],
            ]);
    }
}

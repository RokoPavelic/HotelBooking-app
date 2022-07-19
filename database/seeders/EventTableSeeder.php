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
                'title' => 'Meeting',
                'start' => '2022-07-20 20:00:00',
                'end' => '2022-07-21 20:00:00' ,
                'color' =>'red',
                'description'=> 'Summer wedding '
            ],
            [
                'title' => 'Book club',
                'start' => '2022-07-23 20:00:00',
                'end' => '2022-07-24 20:00:00' ,
                'color' =>'blue',
                'description'=> 'Summer wedding '
            ]
            ]);
    }
}

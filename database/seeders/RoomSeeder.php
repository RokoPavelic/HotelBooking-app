<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    

        Room::create([
            "room_type"   => "room",
            "name"        => "Classic Monochrome",
            "description" => "Decoration from the 19th and first years of 20th century, whick we discovered during reconstruction",
            "location"    => "The northeast corner room is the largest apartment in the castle and its seven windows offer a beautiful view of the pond, the stream and the main courtyard.",
            "amenities"   => "Free toiletries, Bidet, Toilet, Bath or shower, Towels, Hairdryer, Toilet paper, Wi-Fi.",
            "facilities"  => "Bed linen, Wardrobe or closet, Tea and coffee making facilities, Desk"

        ]);

        Room::create([
            "room_type"   => "room",
            "name"        => "Cyan Room",
            "description" => "Decoration from the 19th and first years of 20th century, whick we discovered during reconstruction",
            "location"    => "The east side of the castle, with head to ceiling windows with a wonderful view to the stream and our barn gardens",
            "amenities"   => "Free toiletries, Bidet, Toilet, Bath or shower, Towels, Hairdryer, Toilet paper, Wi-Fi.",
            "facilities"  => "Fireplace, Bed linen, Wardrobe or closet, Tea and coffee making facilities, Desk"
        ]);

        Room::create([
            "room_type"   => "room",
            "name"        => "Geographical Suite",
            "description" => "The main interest of renaud is geography for the art.The large circular installation in the middle.",
            "location"    => "The southeast corner room has beautiful light and a view of the castle's main courtyard and moat, the water of which reflects the sun's rays and creates delicate pictures on the ceiling.",
            "amenities"   => "Free toiletries, Bidet, Toilet, Bath or shower, Towels, Hairdryer, Toilet paper, Wi-Fi.",
            "facilities"  => "Dining table, Bed linen, Wardrobe or closet, Tea and coffee making facilities, Desk"

        ]);

        Room::create([
            "room_type"   => "room",
            "name"        => "Golden Sunrise",
            "description" => "The main interest of renaud is geography for the art.The large circular installation in the middle.",
            "location"    => " South facing windows with views to the far end of the pond.",
            "amenities"   => "Free toiletries, Bidet, Toilet, Bath or shower, Towels, Hairdryer, Toilet paper, Wi-Fi.",
            "facilities"  => "Dining table, Bed linen, Wardrobe or closet, Tea and coffee making facilities, Desk"
        ]);

        Room::create([
            "room_type"   => "event",
            "name"        => "Main Hall",
            "location"    => "indoors",
            "size"        => "125.00 meter²",
            "capacity"    =>  30,
        ]);

        Room::create([
            "room_type"   => "event",
            "name"        => "Barn",
            "location"    => "indoors",
            "size"        => "250.00 meter²",
            "capacity"    =>  100,
        ]);

        Room::create([
            "room_type"   => "event",
            "name"        => "East Garden",
            "location"    => "outdoors",
            "size"        => "500.00 meter²",
            "capacity"    =>  150,
        ]);

        Room::create([
            "room_type"   => "event",
            "name"        => "Pond",
            "location"    => "outdoors",
            "size"        => "500.00 meter²",
            "capacity"    =>  150,
        ]);

    }
}

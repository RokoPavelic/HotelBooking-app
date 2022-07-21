<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;
use DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->truncate();
        DB::table('image_room')->truncate();

        $images = [
            1 => [
                [
                    "src" => "http://drive.google.com/uc?export=view&id=1QBT1LuY-fsrcG4G_VJS4NskwGYVrAG4Z",
                    "alt" => "room classic decor",
                    "slug" => "room_classic_decor",
                ],
                [
                    "src" => "http://drive.google.com/uc?export=view&id=1FLGeWWW0gYGYa8ibWYWuGCJpDslN1NKM",
                    "alt" => "room classic bathroom",
                    "slug" => "room_classic_bathroom"
                ],
                [
                    "src" => "http://drive.google.com/uc?export=view&id=1LGFA_elSSOdbglOOutsMj6060xFwNsQ1",
                    "alt" => "room classic bed",
                    "slug" => "room_classic_bed"
                ],
            ],
            2 => [
                [
                    "src" => "http://drive.google.com/uc?export=view&id=14GT6dRH_AwahameR7XCq4X7e2DOh0PVV",
                    "alt" => "room cyan decor",
                    "slug" => "room_cyan_decor",
                ],
                [
                    "src" => "http://drive.google.com/uc?export=view&id=14TRsMBkha87QGgXILnp-Hm0VcnaTh7IN",
                    "alt" => "room cyan bathroom",
                    "slug" => "room_cyan_bathroom"
                ],
                [
                    "src" => "http://drive.google.com/uc?export=view&id=1Kn6x48P0wry52kfCazsvqNXdlyuMx-hg",
                    "alt" => "room cyan bed",
                    "slug" => "room_cyan_bed"
                ],
            ],
            3 => [
                [
                    "src" => "http://drive.google.com/uc?export=view&id=1up3vUr_ItPFszt83dgOW-xbqfgM5eFdQ",
                    "alt" => "room cave decor",
                    "slug" => "room_cave_decor",
                ],
                [
                    "src" => "http://drive.google.com/uc?export=view&id=12VjhYWRQxgTUqL63Cz2ekHSSU86t_VZD",
                    "alt" => "room cave bathroom",
                    "slug" => "room_cave_bathroom"
                ],
                [
                    "src" => "http://drive.google.com/uc?export=view&id=1pnZ7_ih3rfyTZ-9qMVunCu-hNDP9U4zy",
                    "alt" => "room cave bed",
                    "slug" => "room_cave_bed"
                ],
            ],
            4 => [
                [
                    "src" => "http://drive.google.com/uc?export=view&id=1Kvquu-cSbh2vDF1z9jUauYRtXAl2ZSQd",
                    "alt" => "room gold decor",
                    "slug" => "room_gold_decor",
                ],
                [
                    "src" => "http://drive.google.com/uc?export=view&id=1nWgNG2d4NVWNBb64K7dKWv8K5z7b4vZ2",
                    "alt" => "room gold bathroom",
                    "slug" => "room_gold_bathroom"
                ],
                [
                    "src" => "http://drive.google.com/uc?export=view&id=1QFQkIwHHFPijAh_lYePGLEGJk_qROA8t",
                    "alt" => "room gold bed",
                    "slug" => "room_gold_bed"
                ],
            ],
        ];

        foreach ($images as $room_id => $room_images) {
            foreach ($room_images as $room_image) {
                $image = Image::create($room_image);
                $image->rooms()->attach($room_id);
            };
        }
    }
}

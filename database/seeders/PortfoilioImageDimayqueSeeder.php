<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfoilioImageDimayqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfoilio_image_dimayques')->insert([
            [
                "image"=>"portfolio-1.jpg",
                "lienImage"=>"portfolio-1.jpg",
                "lienDetails"=>'<i class="bx bx-link"></i>'
            ],
            [
                "image"=>"portfolio-2.jpg",
                "lienImage"=>"portfolio-2.jpg",
                "lienDetails"=>'<i class="bx bx-link"></i>'
            ],
            [
                "image"=>"portfolio-3.jpg",
                "lienImage"=>"portfolio-3.jpg",
                "lienDetails"=>'<i class="bx bx-link"></i>'
            ],
            [
                "image"=>"portfolio-4.jpg",
                "lienImage"=>"portfolio-4.jpg",
                "lienDetails"=>'<i class="bx bx-link"></i>'
            ],
            [
                "image"=>"portfolio-5.jpg",
                "lienImage"=>"portfolio-5.jpg",
                "lienDetails"=>'<i class="bx bx-link"></i>'
            ],
            [
                "image"=>"portfolio-6.jpg",
                "lienImage"=>"portfolio-6.jpg",
                "lienDetails"=>'<i class="bx bx-link"></i>'
            ],
            [
                "image"=>"portfolio-.7jpg",
                "lienImage"=>"portfolio-7.jpg",
                "lienDetails"=>'<i class="bx bx-link"></i>'
            ],
            [
                "image"=>"portfolio-8.jpg",
                "lienImage"=>"portfolio-8.jpg",
                "lienDetails"=>'<i class="bx bx-link"></i>'
            ],
            [
                "image"=>"portfolio-9.jpg",
                "lienImage"=>"portfolio-9.jpg",
                "lienDetails"=>'<i class="bx bx-link"></i>'
            ]
        ]);
    }
}

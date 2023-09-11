<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        // Insert new data
        DB::table('categories')->insert([
            [
            'name' => 'Financial Donation',
            'image' => 'https://im.indiatimes.in/content/2023/Jan/donations-2022_63b3f2892a52b.jpg',
            'description' => 'Your financial donation can be a catalyst for learning coding.',
        ],
            [
                'name' => 'Halls and Devices',
                'image' => 'https://www.sbgroupgh.com/productimg/cEKqndou9M26Qkg.jpg',
                'description' => 'Donation halls and devices facilitate generosity and hold the potential to empower individuals to learn coding.',
            ],
            [
                'name' => 'Volunteer',
                'image' => 'https://letsvolunteerla.org/wp-content/uploads/2022/06/P5il-f0Ns.jpeg',
                'description' => 'Consider volunteering to become a code trainer. Your expertise can inspire and equip others with valuable coding skills.',
            ]
    ]);

    }

    }


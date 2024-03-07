<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Fashion & Apparel',
                'image' => 'Fashion & Apparel.Fashion.jpg',
                'description' => 'Events related to fashion shows, runway events, and clothing exhibitions.',
            ],
            [
                'name' => 'Health & Wellness',
                'image' => 'Health & Wellness.Health & Wellness.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Sports & Fitness',
                'image' => 'Sports & Fitness.Fitness.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Business',
                'image' => 'Business.cooperation.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Education',
                'image' => 'Education.Education.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Travel',
                'image' => 'Travel.Travel.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Technology',
                'image' => 'Technology.Techs.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Food & Drink',
                'image' => 'Food & Drink.Food.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Arts & Culture',
                'image' => 'Arts & Culture.Arts.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Music',
                'image' => 'Music.Music.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Family & Parenting',
                'image' => 'Family & Parenting.Family.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Entertainment',
                'image' => 'Entertainment.Entertainment.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Environment',
                'image' => 'Environment.Environment.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Science',
                'image' => 'Science.Science.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Finance',
                'image' => 'Finance.Finance.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Automotive',
                'image' => 'Automotive.Automotive.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
            [
                'name' => 'Pets & Animals',
                'image' => 'Pets & Animals.Pets.png',
                'description' => 'Events related to wellness retreats, and health expos.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

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
                'image' => 'Fashion & Apparel.Fashion.png',
                'description' => 'Events related to fashion shows, runway events, and clothing exhibitions.',
            ],
            [
                'name' => 'Health & Wellness',
                'image' => 'Health & Wellness.Health & Wellness.jpg',
                'description' => 'Events related to fitness, wellness retreats, and health expos.',
            ],
            [
                'name' => 'Sports & Fitness',
                'image' => 'Sports & Fitness.Fitness.jpg',
                'description' => 'Events related to sports competitions, fitness challenges, and athletic events.',
            ],
            [
                'name' => 'Business',
                'image' => 'Business.cooperation.png',
                'description' => 'Events related to entrepreneurship, networking, and business conferences',
            ],
            [
                'name' => 'Education',
                'image' => 'Education.Education.jpg',
                'description' => 'Events related to workshops, seminars, and educational conferences.',
            ],
            [
                'name' => 'Travel',
                'image' => 'Travel.Travel.jpg',
                'description' => 'Events related to travel destinations, tourism, and adventure experiences.',
            ],
            [
                'name' => 'Technology',
                'image' => 'Technology.Techs.jpeg',
                'description' => 'Events related to IT conferences, software development, and tech meetups.',
            ],
            [
                'name' => 'Food & Drink',
                'image' => 'Food & Drink.Food.jpg',
                'description' => 'Events related to food festivals, wine tasting, and culinary workshops.',
            ],
            [
                'name' => 'Arts & Culture',
                'image' => 'Arts & Culture.Arts.jpg',
                'description' => 'Events related to art exhibitions, theater performances, and cultural festivals.',
            ],
            [
                'name' => 'Music',
                'image' => 'Music.Music.jpg',
                'description' => 'Events related to concerts, music festivals, and live performances.',
            ],
            [
                'name' => 'Family & Parenting',
                'image' => 'Family & Parenting.Family.jpg',
                'description' => 'Events related to parenting workshops, family fun days, and children\'s events.',
            ],
            [
                'name' => 'Entertainment',
                'image' => 'Entertainment.Entertainment.jpg',
                'description' => 'Events related to movie premieres, celebrity events, and entertainment shows.',
            ],
            [
                'name' => 'Environment',
                'image' => 'Environment.Environment.jpg',
                'description' => 'Events related to environmental conservation, sustainability, and green initiatives.',
            ],
            [
                'name' => 'Science',
                'image' => 'Science.Science.jpeg',
                'description' => 'Events related to scientific research, innovation, and science exhibitions.',
            ],
            [
                'name' => 'Finance',
                'image' => 'Finance.Finance.jpg',
                'description' => 'Events related to finance, investment seminars, and banking conferences.',
            ],
            [
                'name' => 'Automotive',
                'image' => 'Automotive.Automotive.jpg',
                'description' => 'Events related to car shows, auto expos, and automotive industry conferences.',
            ],
            [
                'name' => 'Pets & Animals',
                'image' => 'Pets & Animals.Pets.png',
                'description' => 'EEvents related to pet shows, animal welfare, and wildlife conservation.',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

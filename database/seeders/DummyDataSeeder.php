<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Lead;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class DummyDataSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $adminId = \App\Models\User::first()->id ?? 1;

        // Categories
        for ($i = 1; $i <= 20; $i++) {
            $name = $faker->unique()->word . ' Category ' . $i;
            Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'created_by' => $adminId,
            ]);
        }

        // Tags
        for ($i = 1; $i <= 20; $i++) {
            $name = $faker->unique()->word . ' Tag ' . $i;
            Tag::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'created_by' => $adminId,
            ]);
        }

        // Sliders
        for ($i = 1; $i <= 20; $i++) {
            Slider::create([
                'image_desktop' => 'sliders/dummy.jpg',
                'heading' => 'Slider Heading ' . $i . ' ' . $faker->sentence(3),
                'subheading' => $faker->sentence(5),
                'btn_text' => 'Click Here',
                'btn_url' => '#',
                'is_active' => true,
                'priority' => $faker->numberBetween(1, 100),
                'created_by' => $adminId,
            ]);
        }

        // Blogs
        $categoryIds = Category::pluck('id')->toArray();
        $tagIds = Tag::pluck('id')->toArray();
        
        for ($i = 1; $i <= 30; $i++) {
            $title = 'Blog Title ' . $i . ' ' . $faker->sentence(4);
            $blog = Blog::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'content' => $faker->paragraphs(3, true),
                'is_published' => $faker->boolean(80),
                'published_at' => now(),
                'created_by' => $adminId,
            ]);

            if (count($categoryIds) > 0) {
                $blog->categories()->attach($faker->randomElements($categoryIds, rand(1, 3)));
            }
            if (count($tagIds) > 0) {
                $blog->tags()->attach($faker->randomElements($tagIds, rand(1, 4)));
            }
        }

        // Leads
        for ($i = 1; $i <= 50; $i++) {
            $date = $faker->dateTimeBetween('-60 days', 'now');
            $lead = new Lead([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'subject' => $faker->sentence(3),
                'message' => $faker->paragraph,
                'status' => $faker->randomElement(['New', 'Contacted', 'Converted', 'Lost']),
                'source' => 'Website',
                'ip_address' => $faker->ipv4,
                'user_agent' => $faker->userAgent,
            ]);
            $lead->created_at = $date;
            $lead->updated_at = $date;
            $lead->save();
        }
    }
}

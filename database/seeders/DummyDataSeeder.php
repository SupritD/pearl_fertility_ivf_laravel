<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Slider;
use App\Models\Appointment;
use App\Models\Blog;
use App\Models\Lead;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class DummyDataSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $admin = \App\Models\User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin User',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'is_admin' => true,
            ]
        );
        $adminId = $admin->id;

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
        Slider::truncate();
        $sliders = [
            [
                'image_desktop' => 'sliders/banner_1.jpg',
                'heading' => 'Nova Fertility Clinic',
                'subheading' => 'Guiding hearts, nurturing dreams. Compassionate pathways to parenthood.',
                'btn_text' => 'Learn More',
                'btn_url' => '/about-us',
                'is_active' => true,
                'priority' => 1,
                'created_by' => $adminId,
            ],
            [
                'image_desktop' => 'sliders/banner_2.jpg',
                'heading' => 'Start Your Journey',
                'subheading' => 'Personalized, compassionate care at our state-of-the-art IVF center.',
                'btn_text' => 'Book Consultation',
                'btn_url' => '/contact',
                'is_active' => true,
                'priority' => 2,
                'created_by' => $adminId,
            ],
        ];

        foreach ($sliders as $sliderData) {
            Slider::create($sliderData);
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

        // Insert a repeated lead
        $repeatedLeadDate = \Carbon\Carbon::now();
        $lead1 = new Lead([
            'name' => 'John Doe (Repeat)',
            'email' => 'repeat@johndoe.com',
            'phone' => '123-456-7890',
            'subject' => 'First Inquiry',
            'message' => 'Hello there',
            'status' => 'New',
            'source' => 'Website',
        ]);
        $lead1->created_at = $repeatedLeadDate->copy()->subDays(5);
        $lead1->updated_at = $repeatedLeadDate->copy()->subDays(5);
        $lead1->save();

        $lead2 = new Lead([
            'name' => 'John Doe (Repeat)',
            'email' => 'repeat@johndoe.com', // Repeated email
            'phone' => '098-765-4321', // Different phone
            'subject' => 'Follow up Inquiry',
            'message' => 'Just following up',
            'status' => 'New',
            'source' => 'Website',
        ]);
        $lead2->created_at = $repeatedLeadDate;
        $lead2->updated_at = $repeatedLeadDate;
        $lead2->save();

        // Appointments
        Appointment::truncate();
        $statuses = ['pending', 'confirmed', 'cancelled'];
        $slots = ['9:00 a.m. - 12:00 p.m.', '12:00 p.m. - 4:00 p.m.', '4:00 p.m. - 8:00 p.m.'];
        
        for ($i = 1; $i <= 20; $i++) {
            $date = $faker->dateTimeBetween('-30 days', 'now');
            $appt = new Appointment([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'phone' => $faker->phoneNumber,
                'email' => $faker->safeEmail,
                'dob' => $faker->dateTimeBetween('-40 years', '-20 years')->format('Y-m-d'),
                'slot' => $faker->randomElement($slots),
                'message' => $faker->optional(0.7)->realText(100),
                'status' => $faker->randomElement($statuses),
            ]);
            $appt->created_at = $date;
            $appt->updated_at = $date;
            $appt->save();
        }

        // Add explicitly repeated appointment
        $apptDate = \Carbon\Carbon::now();
        $appt1 = new Appointment([
            'first_name' => 'Jane',
            'last_name' => 'Smith (Repeat)',
            'address' => '123 Main St',
            'city' => 'Anytown',
            'phone' => '555-123-4567',
            'email' => 'jane.repeat@smith.com',
            'dob' => '1990-01-01',
            'slot' => '9:00 a.m. - 12:00 p.m.',
            'message' => 'First appt',
            'status' => 'confirmed',
        ]);
        $appt1->created_at = $apptDate->copy()->subDays(10);
        $appt1->updated_at = $apptDate->copy()->subDays(10);
        $appt1->save();

        $appt2 = new Appointment([
            'first_name' => 'Jane',
            'last_name' => 'Smith (Repeat)',
            'address' => '123 Main St',
            'city' => 'Anytown',
            'phone' => '555-999-8888', // Different phone
            'email' => 'jane.repeat@smith.com', // Repeated email
            'dob' => '1990-01-01',
            'slot' => '12:00 p.m. - 4:00 p.m.',
            'message' => 'Follow up appt',
            'status' => 'pending',
        ]);
        $appt2->created_at = $apptDate;
        $appt2->updated_at = $apptDate;
        $appt2->save();

        // Reviews
        \App\Models\Review::truncate();
        $reviews = [
            [
                'patient_name' => 'SNEHA BHIWANDKAR',
                'review_text' => "Dr. Pritimala is incredable. Not only has she taken great care of my health, but also she is lovely to speak with at every appointment thank you doctor",
                'rating' => 5,
                'is_published' => true,
                'review_date' => now()->subMonths(2)->toDateString(),
            ],
            [
                'patient_name' => 'SHOBA GOSWAMI',
                'review_text' => "It's a great experience to have such a talented doctor like doctor pritimala gangurde kadam to achieve my motherhood journey. Thanks a lot, Ma'am. I am always will be grateful to you",
                'rating' => 5,
                'is_published' => true,
                'review_date' => now()->subMonths(6)->toDateString(),
            ],
            [
                'patient_name' => 'CHANCHALA KAMBLE',
                'review_text' => "A very good IVF center.Dr. Pritimala is very caring and cooperative. In every appointment she is taking proper care of my health. Thank you madam for your kind support.",
                'rating' => 5,
                'is_published' => true,
                'review_date' => now()->subMonths(6)->toDateString(),
            ],
            [
                'patient_name' => 'Yash Shah',
                'review_text' => "Thank you pritimala maam for your efforts and guidance. Because of your precise decisions and experience of correct medication our family is completed. Highly recommended.",
                'rating' => 5,
                'is_published' => true,
                'review_date' => now()->subMonths(6)->toDateString(),
            ],
        ];

        foreach ($reviews as $reviewData) {
            \App\Models\Review::create($reviewData);
        }
    }
}

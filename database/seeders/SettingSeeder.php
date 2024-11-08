<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->truncate();
        Setting::insert([
            [
                "key" => "site_phone_number",
                "value" => "+880123456789"
            ],
            [
                "key" => "site_phone_number_2",
                "value" => "+880173456789"
            ],
            [
                "key" => "site_email",
                "value" => "admin@admin.com"
            ],
            [
                "key" => "site_email_2",
                "value" => "moderator@admin.com"
            ],
            [
                "key" => "site_address",
                "value" => "503 Old Buffalo Street Northwest #205, New York-3087"
            ],
            [
                "key" => "site_logo_url",
                "value" => "images/site_logo_url.png"
            ],
            [
                "key" => "homepage_search_field_label",
                "value" => "Find The Best Doctor"
            ],
            [
                "key" => "homepage_banner_image",
                "value" => "new-banner-img.webp"
            ],
            [
                "key" => "aboutus_page_content",
                "value" => "<strong>Apple</strong>"
            ],

        ]);
    }
}

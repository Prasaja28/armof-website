<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Settings;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::truncate();
        Settings::create([
            'key' => 'url_facebook',
            'value' => 'https://facebook.com',
        ]);

        Settings::create([
            'key' => 'url_instagram',
            'value' => 'https://www.instagram.com/armof.id/',
        ]);

        Settings::create([
            'key' => 'url_whatsapp',
            'value' => 'https://whatsapp.com',
        ]);

        Settings::create([
            'key' => 'url_twitter',
            'value' => 'https://twitter.com',
        ]);
        Settings::create([
            'key' => 'url_tiktok',
            'value' => 'https://tiktok.com',
        ]);

        Settings::create([
            'key' => 'url_youtube',
            'value' => 'https://youtube.com',
        ]);

        Settings::create([
            'key' => 'url_linkedin',
            'value' => 'https://linkedin.com',
        ]);
    }
}

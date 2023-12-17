<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('settings')->delete();
        \DB::table('settings')->insert([
            ['slug' => 'site_name', 'value' => 'LeadTech Solution', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
            ['slug' => 'facebook_url', 'value' => 'https://www.facebook.com/', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
            ['slug' => 'twitter_url', 'value' => 'https://www.facebook.com/', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
            ['slug' => 'linked_in_url', 'value' => 'https://www.facebook.com/', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
            ['slug' => 'other_url', 'value' => 'https://www.facebook.com/', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
            ['slug' => 'footer_text', 'value' => 'fasd', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
            ['slug' => 'map', 'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14712.00874290771!2d89.5441316657673!3d22.802382900047878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8ff9603b90bf%3A0xbd8858d11188c418!2sNirala%20More%2C%20Khulna!5e0!3m2!1sen!2sbd!4v1687029680120!5m2!1sen!2sbd', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
            ['slug' => 'rts_feature_title', 'value' => 'Rts Feature Title', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
            ['slug' => 'rts_feature_disc', 'value' => 'Rts Feature Title', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
            ['slug' => 'rts_favorite_title', 'value' => 'Rts Feature Title', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
            ['slug' => 'rts_favorite_disc', 'value' => 'Rts Feature Title', 'created_at' => '2021-12-02 18:27:19', 'updated_at' => '2021-12-02 18:27:19'],
        ]);
    }
}

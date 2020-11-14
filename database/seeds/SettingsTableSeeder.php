<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Site Title',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 =>
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Site Description',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 =>
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => NULL,
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Site',
            ),
            3 =>
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 4,
                'group' => 'Site',
            ),
            4 =>
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 =>
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => config('app.name'),
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 =>
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Welcome to '. config('app.name'),
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 =>
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 =>
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 =>
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 =>
            array (
                'id' => 11,
                'key' => 'site.favicon',
                'display_name' => 'favicon',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 6,
                'group' => 'Site',
            ),
            11 =>
            array (
                'id' => 12,
                'key' => 'site.author_desc',
                'display_name' => 'Author',
                'value' => '<p>' .config('app.name') . ' is one amongst the best online coupons and reviews website. We provide great deals for about 10,000 stores with working coupons and update them daily.</p>',
                'details' => NULL,
                'type' => 'rich_text_box',
                'order' => 7,
                'group' => 'Site',
            ),
            12 =>
            array (
                'id' => 13,
                'key' => 'site.default-image',
                'display_name' => 'Default Blog Image',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 8,
                'group' => 'Site',
            ),
        ));


    }
}
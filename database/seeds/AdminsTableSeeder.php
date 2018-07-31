<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed default admins
        $admins = [
            [
                'name' => 'Underwriter Bot',
                'email' => 'contact@underwriter.com',
                'password' => bcrypt(str_random(8)),
                'api_token' => 'h2P9IWHOL6r7R85kku0VkBxL4HaH7m7PQmlhKtuNS0iXD3GsSow7EJk97if2YdqHPCHYjBLEElSPrSNV'
            ],[
                'name' => 'Vishnu Sharma',
                'email' => 'vishnu@getolly.com',
                'password' => bcrypt('Vishnu@123')
            ],[
                'name' => 'Santosh Achari',
                'email' => 's@ya3.co',
                'password' => bcrypt('secret')
            ],
        ];

        foreach ($admins as $admin) {
            \App\Admin::create($admin);
        }
    }
}

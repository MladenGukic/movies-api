<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
        App\User::create(['name' => 'Admin Adminovic', 'email' => 'mladen@admin.com', 'password' => bcrypt('adminko')]);
    }
}

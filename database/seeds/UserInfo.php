<?php

use Illuminate\Database\Seeder;

class UserInfo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\userinfo::class, 50)->create();
    }
}

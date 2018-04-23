<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(\App\I_category::class,10)->create();
        factory(\App\I_function::class,10)->create();
        factory(\App\M_i_category::class,10)->create();
        factory(\App\M_i_category_dtl::class,10)->create();
        factory(\App\M_i_function_dtl::class,10)->create();
        factory(\App\M_maker::class,10)->create();
    }

}



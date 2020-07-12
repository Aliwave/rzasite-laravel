<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ContactInfoTableSeeder::class);
        //$this->call(GalleryTableSeeder::class);
        $this->call(OlyRulesTableSeeder::class);
        $this->call(MainInfoTableSeeder::class);
        $this->call(NominationSeeder::class);
        $this->call(MainPageSeeder::class);
        $this->call(TaskPageSeeder::class);
    }
}

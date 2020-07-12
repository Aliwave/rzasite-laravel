<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->email = '\\';
        $admin->password = Hash::make('\\');
        $admin->role = User::ROLE_ADMIN;
        $admin->save();
    }
}

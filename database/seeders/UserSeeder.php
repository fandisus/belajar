<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::insert([
            ['username'=>'admin', 'password'=>User::hashPassword('admin'), 'email'=>'admin@admin.com', 'jwt'=>''],
            ['username'=>'fandi', 'password'=>User::hashPassword('fandi'), 'email'=>'fandi@admin.com', 'jwt'=>''],
        ]);
    }
}

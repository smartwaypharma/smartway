<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('name', 'admin')->exists()) {
            User::where('name', 'admin')->update([
                'email' => 'admin@admin.com',
                'password' => Hash::make('2hUmT$wU')
            ]);
        } else {
            User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('2hUmT$wU')
            ]);
        }
    }
}

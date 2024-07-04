<?php

namespace Database\Seeders;

use App\Models\student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*  User::factory()->create([
             'name' => 'Jin Jian',
             'email' => 'jinjian@example.com',
             'password' => bcrypt('Password@123'),
         ]); */

        /*  student::factory(10)->create(); */

        $this->call(StandardSeeder::class);

    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@gmail.com',
             'password' => bcrypt('123'),
            'is_admin' => 1,
            ]);

    }
}

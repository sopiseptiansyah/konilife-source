<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Konilife',
            'email' => 'admin@konilife.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('Asdw1234##'),
            // 'avatar' => $faker->imageUrl($width = 400, $height = 400),
        ]);
    }
}

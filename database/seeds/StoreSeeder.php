<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('stores')->insert([
            [
                'name' => 'ABADI APT',
                'address' => 'JL. RAYA LASWI NO.777 CIPARAY',
                'phone' => '89663656560',
                'regencie_id' => 3273,
                'lat' => -6.917464,
                'lng' => 107.619125,
            ],
            [
                'name' => 'Kami Jaya Mayestik, APT',
                'address' => 'JL. Kyai Mojo No.7BB Mayestik',
                'phone' => '896636565605',
                'regencie_id' => 3273,
                'lat' => -6.9414688,
                'lng' => 107.6255469,
            ],
        ]);
    }
}

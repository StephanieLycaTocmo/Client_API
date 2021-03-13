<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Stephanie Lyca Tocmo',
                'address' => 'Catmonan, Calape, Bohol',
                'phone' => '09462397919',
                'capitalization' => 1200.00,
                'loan' => 2000.00
            ],

            [
                'name' => 'Ronemae Gacera',
                'address' => 'Catmonan, Calape, Bohol',
                'phone' => '09126752617',
                'capitalization' => 10200.00,
                'loan' => 5000.00
            ],

            [
                'name' => 'Anna Lydel Tomo',
                'address' => 'Catmonan, Calape, Bohol',
                'phone' => '09091272681',
                'capitalization' => 11200.00,
                'loan' => 900.00
            ],
        ];

        foreach($data as $client){
            \App\Client::create($client);
        }
    }
}

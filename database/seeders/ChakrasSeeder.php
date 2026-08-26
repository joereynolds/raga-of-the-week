<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChakrasSeeder extends Seeder
{
    public function run(): void
    {
        $chakras = [
            [
                'id' => 1 ,
                'name' => 'Indu',
                'description' => 'Indu stands for the moon, of which we have only one - hence it is the first chakra.'
            ],

            [
                'id' => 2 ,
                'name' => 'Netra',
                'description' => 'Netra means eye and all living beings have two eyes - hence it is the second.'
            ],

            [
                'id' => 3 ,
                'name' => 'Agni',
                'description' => 'Agni suggests the three sacrifical fires, Dakshina, Ahavaniyam, and Garhapatya - hence it is the third.'
            ],

            [
                'id' => 4 ,
                'name' => 'Veda',
                'description' => 'Vēda. There are four Vedas; Rig, Yajur, Sama and Atharva - hence it is the fourth'
            ],

            [
                'id' => 5 ,
                'name' => 'Bāṇa',
                'description' => 'Bāṇa stands for number 5. The pancha banas of Manmatha or the five arrows of Cupid are the five kinds of flowers; lotus, mango, asoka, jasmine and blue water-lily - hence it is the fifth.'
            ],

            [
                'id' => 6 ,
                'name' => 'Rutu',
                'description' => 'Rutu stands for number 6. Standing for the 6 seasons of Hindu calendar, which are Vasanta, Greeshma, Varsha, Sharat, Hemanta and Shishira - hence it is the sixth.'
            ],

            [
                'id' => 7 ,
                'name' => 'Rishi',
                'description' => ''
            ],

            [
                'id' => 8 ,
                'name' => 'Vasu',
                'description' => ''
            ],

            [
                'id' => 9 ,
                'name' => 'Brahma',
                'description' => ''
            ],

            [
                'id' => 10,
                'name' => 'Disi',
                'description' => ''
            ],

            [
                'id' => 11,
                'name' => 'Rudra',
                'description' => ''
            ],

            [
                'id' => 12,
                'name' => 'Ādityas',
                'description' => ''
            ],

        ];

        DB::table('chakras')->insert($chakras);
    }
}

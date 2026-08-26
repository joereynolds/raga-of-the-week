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
                'id' => 1,
                'name' => 'Indu',
                'description' => 'Indu stands for the moon, of which we have only one - hence it is the first chakra.'
            ],

            [
                'id' => 2,
                'name' => 'Netra',
                'description' => 'Netra means eye and all living beings have two eyes - hence it is the second.'
            ],

            [
                'id' => 3,
                'name' => 'Agni',
                'description' => 'Agni suggests the three sacrificial fires, Dakshina, Ahavaniyam, and Garhapatya - hence it is the third.'
            ],

            [
                'id' => 4,
                'name' => 'Veda',
                'description' => 'Vēda. There are four Vedas; Rig, Yajur, Sama and Atharva - hence it is the fourth.'
            ],

            [
                'id' => 5,
                'name' => 'Bāṇa',
                'description' => 'Bāṇa stands for number 5. The pancha banas of Manmatha or the five arrows of Cupid are the five kinds of flowers; lotus, mango, asoka, jasmine and blue water-lily - hence it is the fifth.'
            ],

            [
                'id' => 6,
                'name' => 'Rutu',
                'description' => 'Rutu stands for number 6. Standing for the 6 seasons of Hindu calendar, which are Vasanta, Greeshma, Varsha, Sharat, Hemanta and Shishira - hence it is the sixth.'
            ],

            [
                'id' => 7,
                'name' => 'Rishi',
                'description' => 'Rishi stands for number 7. The sapta rishis being Gautama, Bharadvaja, Visvamitra, Jamadagni, Vasishta, Kasyapa, and Atri - hence it is the seventh.'
            ],

            [
                'id' => 8,
                'name' => 'Vasu',
                'description' => 'Vasu stands for the 8 ashta vasus - hence it is the eighth.'
            ],

            [
                'id' => 9,
                'name' => 'Brahma',
                'description' => 'Brahma stands for the 9 Navabrahmas - hence it is the ninth.'
            ],

            [
                'id' => 10,
                'name' => 'Disi',
                'description' => 'Disi stands for the 10 directions - hence it is the tenth.'
            ],

            [
                'id' => 11,
                'name' => 'Rudra',
                'description' => 'Rudra stands for 11, the concept of Ekadasa Rudras - hence it is the eleventh.'
            ],

            [
                'id' => 12,
                'name' => 'Āditya',
                'description' => 'Āditya stands for 12, the concept of the 12 suns - hence it is the twelfth.'
            ],

        ];

        DB::table('chakras')->insert($chakras);
    }
}

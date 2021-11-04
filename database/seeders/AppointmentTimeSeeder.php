<?php

namespace Database\Seeders;

use App\Models\Settings\Time;
use Illuminate\Database\Seeder;

class AppointmentTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $times=[
            '6.00 am',
            '6.20 am',
            '6.40 am',
            '7.00 am',
            '7.20 am',
            '7.40 am',
            '8.00 am',
            '8.20 am',
            '8.40 am',
            '9.00 am',
            '9.20 am',
            '9.40 am',
            '10.00 am',
            '10.20 am',
            '10.40 am',
            '11.00 am',
            '11.20 am',
            '11.40 am',
            '12.00 am',
            '12.20 am',
            '12.40 am',
            '1.00 pm',
            '1.20 pm',
            '1.40 pm',
            '2.00 pm',
            '2.20 pm',
            '2.40 pm',
            '3.00 pm',
            '3.20 pm',
            '3.40 pm',
            '4.00 pm',
            '4.20 pm',
            '4.40 pm',
            '5.00 pm',
            '5.20 pm',
            '5.40 pm',
            '6.00 pm',
            '6.20 pm',
            '6.40 pm',
            '7.00 pm',
            '7.20 pm',
            '7.40 pm',
            '8.00 pm',
            '8.20 pm',
            '8.40 pm',
            '9.00 pm',
            '9.20 pm',
            '9.40 pm',
            '10.00 pm',
            '10.20 pm',
            '10.40 pm',
            '11.00 pm',
            '11.20 pm',
            '11.40 pm',
            '12.00 am',
            '12.20 am',
            '12.40 am',
        ];

        $data = [];
        $maxCount = count($times);
        for($i=0;$i<$maxCount;$i++){
            $data[] = [
                'name' => $times[$i],
                'created_by' => 1,
                'created_at' => now(),
            ];
        }
        $chunks = array_chunk($data, $maxCount);
        foreach ($chunks as $chunk) {
            Time::insert($chunk);
        }


    }
}

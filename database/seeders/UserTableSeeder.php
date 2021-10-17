<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {


        $doctor =[
        ['name' => 'fahim ahmed', 'email' => 'someone@gmail.com','department'=>'Cardiologist'],
        ['name' => 'rakib hasan', 'email' => 'esomeone@gmail.com','department'=>'Cardiologist' ],
        ['name' => 'john doe', 'email' => 'jsomeone@gmail.com','department'=>'Cardiologist'],
        ['name' => 'rifat chow', 'email' => 'asomeone@gmail.com','department'=>'Cardiologist'],
        ['name' => 'Mehedi Hasan', 'email' => 'nsomeone@gmail.com','department'=>'Cardiologist'],
        ['name' => 'Zulfikar','email'=>'zulf@gmail.com','department'=>'Cardiologist']
        ];
    $data = [];
    $maxCount = count($doctor);
    for($i=0;$i<$maxCount;$i++){
        $data[] = [
            'name' => $doctor[$i]['name'],
            'email' => $doctor[$i]['email'],
            'password'=>bcrypt('1234567'),
            'role_id'=>2,
            'department' => $doctor[$i]['department'],
            'created_at' => now(),
        ];
    }

    $chunks = array_chunk($data, $maxCount);
    foreach ($chunks as $chunk) {
        User::insert($chunk);
    }


    }
}

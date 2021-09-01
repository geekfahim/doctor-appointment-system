<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Role::create(['name'=>'Admin']);
        Role::create(['name'=>'Doctor']);
        Role::create(['name'=>'Patient']);

        $systemuser = new User();
        $systemuser->name ="admin";
        $systemuser->email = "admin@gmail.com";
        $systemuser->password =bcrypt('12345678');
        $systemuser->role_id = 1;
        $systemuser->department='Cardiologist';
        $systemuser->remember_token = Str::random(10);
        $systemuser->email_verified_at = now();
        $systemuser->save();
    }
}

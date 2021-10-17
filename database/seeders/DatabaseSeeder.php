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

        Role::create(['id'=>1,'name'=>'Admin']);
        Role::create(['id'=>2,'name'=>'Doctor']);
        Role::create(['id'=>3,'name'=>'Patient']);

        $systemuser = new User();
        $systemuser->name ="admin";
        $systemuser->email = "admin@gmail.com";
        $systemuser->password =bcrypt('12345678');
        $systemuser->role_id = 1;
        $systemuser->department='Cardiologist';
        $systemuser->remember_token = Str::random(10);
        $systemuser->email_verified_at = now();
        $systemuser->save();

        $this->call([UserTableSeeder::class]);
    }
}

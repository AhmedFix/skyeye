<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'super_admin',
            'email' => 'super_admin@app.com',
            'password' => bcrypt('123321'),
            'type' => 'super_admin',
        ]);

        $user->attachRole('super_admin');

        // Create admin
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@app.com',
            'password' => bcrypt('123321'),
            'type' => 'admin',
        ]);

        // Create Student
        $user = User::create([
            'name' => 'student',
            'email' => 'student@app.com',
            'password' => bcrypt('123321'),
            'type' => 'student',
        ]);

        $user->attachRole('student');
       
        // Create Teacher
        $user = User::create([
            'name' => 'teacher',
            'email' => 'teacher@app.com',
            'password' => bcrypt('123321'),
            'type' => 'teacher',
        ]);

        $user->attachRole('teacher');

    }//end of run

}//end of seeder

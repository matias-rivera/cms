<?php

use Illuminate\Database\Seeder;

use App\User;

use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = User::where('email','admin@gmail.com')->first();

        if(!$user){
            User::create([
                'role' => 'admin',
                'name' => 'Matias Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('root'),

            ]);
        }

    }
}

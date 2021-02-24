<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        // User::create([
        // 	[
        //         'name' => 'webmaster',
        //         'email' => 'webmaster@testmail.com',
        //         'password' => Hash::make('P@ssword1')
        //     ],
        //     [
        //         'name' => 'henry',
        //         'email' => 'henry@testmail.com',
        //         'password' => Hash::make('P@ssword1')
        //     ],
        // ]);

        User::insert(array(
            0 => 
            array(
            'name' => 'webmaster',
            'email' => 'webmaster@testmail.com',
            'password' => Hash::make('P@ssword1')
            ),
        ));

    }
}

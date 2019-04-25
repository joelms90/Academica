<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 		$user = new User;
        $user->name = 'Adalid';
        $user->email = 'czanabri@inttelmex.com.mx';
        $user->password=bcrypt('czanabri');
        $user->phone='5580278961';
        $user->save();

        $user = new User;
        $user->name = 'Vianet';
        $user->email = 'vmalvare@inttelmex.com.mx';
        $user->password=bcrypt('vmalvare');
        $user->phone='5580278961';
        $user->save();

    }
}

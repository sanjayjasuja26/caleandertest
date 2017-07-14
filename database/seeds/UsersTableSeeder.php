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
      $users = [
      ['name' => 'Admin', 'email'=>"admin@gmail.com", 'role_id'=> '1','password'=>'123456'],
      ['name' => 'Client', 'email'=>"client@gmail.com", 'role_id'=> '0', 'password'=>'123456']
    ];

    foreach ($users as $key => $user) {
      $newUser = User::firstOrNew(['email' => $user['email']]);
      $newUser->name = $user['name'];
      $newUser->email = $user['email'];
      $newUser->role_id = $user['role_id'];
      $newUser->password = \Hash::make($user['password']);

      $newUser->save();
    }
    }
}

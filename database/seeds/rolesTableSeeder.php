<?php

use Illuminate\Database\Seeder;
use App\role;

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles =
        [
           ['name'=>'admin'],
           ['name'=>'user']

        ];

        role::truncate();

        foreach($roles as  $role)
        {
          $datarole = new role;
          $datarole->name = $role['name'];
          $datarole->save();
        }


    }
}

<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Role::truncate();
       $roles = [
         ['name'=>'admin'],
         ['name'=>'user']
       ];
      foreach($roles as $role)
      {
        $userrole = new Role;
        $userrole->name = $role['name'];
        $userrole->save();

      }

    }
}

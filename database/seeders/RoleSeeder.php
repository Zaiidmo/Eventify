<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = new Permission();
        $permission->name = 'create-event';
        $permission->save();

        $role = new Role();
        $role->name = 'organizer';
        $role->save();
        $role->permissions()->attach($permission);
        $permission->roles()->attach($role);

        $permission = new Permission();
        $permission->name = 'create-category';
        $permission->save();

        $role = new Role();
        $role->name = 'manager';
        $role->save();
        $role->permissions()->attach($permission);
        $permission->roles()->attach($role);

        $manager = Role::where('name', 'manager')->first();
        $organizer = Role::where('name', 'organizer')->first();
        // $create_event = Permission::where('name', 'create-event')->first();
        // $create_category = Permission::where('name', 'create-category')->first();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($manager);
        // $admin->permissions()->attach($create_category);

        $user = new User();
        $user->name = 'organizer';
        $user->email = 'organizer@gmail.com';
        $user->password = bcrypt('organizer');
        $user->save();
        $user->roles()->attach($organizer);
        // $user->permissions()->attach($create_event);
    }
}

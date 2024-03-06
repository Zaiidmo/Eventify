<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create and attach permissions for events
        $createEventPermission = Permission::create(['name' => 'create-event']);
        $updateEventPermission = Permission::create(['name' => 'update-event']);
        $deleteEventPermission = Permission::create(['name' => 'delete-event']);

        // Create and attach permissions for categories
        $createCategoryPermission = Permission::create(['name' => 'create-category']);
        $updateCategoryPermission = Permission::create(['name' => 'update-category']);
        $deleteCategoryPermission = Permission::create(['name' => 'delete-category']);

        // Create and attach roles with permissions
        $organizer = Role::create(['name' => 'organizer']);
        $organizer->permissions()->attach([$createEventPermission->id, $updateEventPermission->id, $deleteEventPermission->id]);

        $manager = Role::create(['name' => 'manager']);
        $manager->permissions()->attach([$createEventPermission->id, $updateEventPermission->id, $deleteEventPermission->id, $createCategoryPermission->id, $updateCategoryPermission->id, $deleteCategoryPermission->id]);

        $spectator = Role::create(['name' => 'spectator']);
        // $manager->permissions()->attach([$createEventPermission->id, $updateEventPermission->id, $deleteEventPermission->id, $createCategoryPermission->id, $updateCategoryPermission->id, $deleteCategoryPermission->id]);

        // Create admin user and assign manager role
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($manager);

        // Create organizer user and assign organizer role
        $user = new User();
        $user->name = 'Organizer';
        $user->email = 'organizer@gmail.com';
        $user->password = bcrypt('organizer');
        $user->save();
        $user->roles()->attach($organizer);

        // Create spectator user and assign spectator role
        $user = new User();
        $user->name = 'Spectator';
        $user->email = 'spectator@gmail.com';
        $user->password = bcrypt('spectator');
        $user->save();
        $user->roles()->attach($spectator);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Permisson;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles=[
            ['name'=>'super-admin','display_name'=>'Super Admin','group'=>'system'],
            ['name'=>'admin','display_name'=>'Admin','group'=>'system'],
            ['name'=>'manager','display_name'=>'manager','group'=>'system'],
            ['name'=>'user','display_name'=>'user','group'=>'system'],

        ];
        foreach ($roles as $role){
            Role::updateOrCreate($role);
        }
        $permissions=[
            ['name'=>'create-user','display_name'=>'Create user','group'=>'User'],
            ['name'=>'update-user','display_name'=>'Update user','group'=>'User'],
            ['name'=>'show-user','display_name'=>'Show user','group'=>'User'],
            ['name'=>'delete-user','display_name'=>'Delete user','group'=>'User'],

            ['name'=>'create-role','display_name'=>'Create role','group'=>'role'],
            ['name'=>'update-role','display_name'=>'Update role','group'=>'role'],
            ['name'=>'show-role','display_name'=>'Show role','group'=>'role'],
            ['name'=>'delete-role','display_name'=>'Delete role','group'=>'role'],

            ['name'=>'create-category','display_name'=>'Create category','group'=>'category'],
            ['name'=>'update-category','display_name'=>'Update category','group'=>'category'],
            ['name'=>'show-category','display_name'=>'Show category','group'=>'category'],
            ['name'=>'delete-category','display_name'=>'Delete category','group'=>'category'],

            ['name'=>'create-product','display_name'=>'Create product','group'=>'product'],
            ['name'=>'update-product','display_name'=>'Update product','group'=>'product'],
            ['name'=>'show-product','display_name'=>'Show product','group'=>'product'],
            ['name'=>'delete-product','display_name'=>'Delete product','group'=>'product'],

            ['name'=>'create-coupon','display_name'=>'Create coupon','group'=>'coupon'],
            ['name'=>'update-coupon','display_name'=>'Update coupon','group'=>'coupon'],
            ['name'=>'show-coupon','display_name'=>'Show coupon','group'=>'coupon'],
            ['name'=>'delete-coupon','display_name'=>'Delete coupon','group'=>'coupon'],


        ];
        foreach ($permissions as $item){
                Permisson::updateOrCreate($item);
            }
    }
}

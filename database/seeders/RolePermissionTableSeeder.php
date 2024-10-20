<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    const ADMIN_ROLE_ID = 1;
    const AGENT_ROLE_ID = 2;
    public function run(): void
    {
        $admin_permissions = Permission::all();
        $agent_permissions = Permission::where('name', 'like', 'ticket_%')->get();

        Role::findOrFail(self::ADMIN_ROLE_ID)->permissions()->sync($admin_permissions);
        Role::findOrFail(self::AGENT_ROLE_ID)->permissions()->sync($agent_permissions);
    }
}

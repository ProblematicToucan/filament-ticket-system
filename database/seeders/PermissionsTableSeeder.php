<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run(): void
    {
        $entities = ['permission', 'role', 'category', 'ticket', 'user'];
        $actions = ['access', 'show', 'create', 'update', 'delete'];

        $permissions = [];

        foreach ($entities as $entity) {
            foreach ($actions as $action) {
                $permissions[] = [
                    'name' => "{$entity}_{$action}"
                ];
            }
        }

        Permission::insert($permissions);
    }
}

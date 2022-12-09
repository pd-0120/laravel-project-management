<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accountPermissions = [
			['name'		=> 	'list_user_accounts', 'description' => 'Allow role to view users accounts', 'routeName' => 'admin.account', 'moduleName' => 'account'],
		];

        $permissionsArray	=	array_merge($accountPermissions);

        foreach($permissionsArray as $permissionData)
		{
			if((Permission::where('name', $permissionData['name'])->first() == NULL))
			{
				$permission = new Permission;
				$permission->name           = $permissionData['name'];
				$permission->description    = $permissionData['description'];
				$permission->route_name      = $permissionData['routeName'];
				$permission->guard_name     = 'web';
				$permission->module_name     = $permissionData['moduleName'];
				$permission->alias          = $permissionData['name'];
				$permission->save();
			}
		}
    }
}

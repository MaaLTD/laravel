<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{

    const ROLES = [
        ['name' => 'Boss',],
        ['name' => 'Admin',],
        ['name' => 'Main-Manager',],
        ['name' => 'Manager',],
        ['name' => 'Client',],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (self::ROLES as $role) {
            $role['created_at'] = Carbon::now();
            $role['updated_at'] = Carbon::now();

            DB::table('roles')->insert($role);
        }
    }
}

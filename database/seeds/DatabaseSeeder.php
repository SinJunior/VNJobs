<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OrganizationsSeeder::class);
        $this->call(UsersOrganizationsSeeder::class);
        $this->call(MajorTableSeeder::class);        
        $this->call(RecruitmentNewsTableSeeder::class);
        $this->call(AdminTableSeeder::class);
    }
}

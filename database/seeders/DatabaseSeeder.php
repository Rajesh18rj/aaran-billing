<?php

namespace Database\Seeders;

use Aaran\Common\Database\Seeders\S101_LabelSeeder;
use Aaran\Common\Database\Seeders\S102_CommonSeeder;
use Aaran\Master\Database\Seeders\S201_CompanySeeder;
use Aaran\Master\Database\Seeders\S202_ContactSeeder;
use Aaran\Master\Database\Seeders\S204_OrderSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        S01_TenantSeeder::run();
        S02_RoleSeeder::run();
        S03_UserSeeder::run();
        S04_DefaultCompanySeeder::run();

        S101_LabelSeeder::run();
        S102_CommonSeeder::run();

        S201_CompanySeeder::run();
        S202_ContactSeeder::run();
        S204_OrderSeeder::run();
    }
}

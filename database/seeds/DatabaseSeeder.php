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
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(GroupMenusTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuFrontendsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(BlogCategoriesTableSeeder::class);
        $this->call(LinksTableSeeder::class);
    }
}

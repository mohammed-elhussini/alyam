<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Brand;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call(ManagersTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(BranchesTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(CarsTableSeeder::class);
    }
}

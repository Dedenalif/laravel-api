<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i <=10; $i++) {
            Supplier::create([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'address' => $faker->address
            ]);
        }
    }
}

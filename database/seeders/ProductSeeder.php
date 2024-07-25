<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder; // Ensure this import is correct
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::firstOrCreate([
            'code' => 'ip2region',
        ], [
            'name'        => 'ip2region',
            'description' => 'ip2region',
        ]);

        Product::firstOrCreate([
            'code' => 'areaCode',
        ], [
            'name'        => 'Area Code API',
            'description' => 'Area Code API description',
        ]);

        Product::firstOrCreate([
            'code' => 'myLocation',
        ], [
            'name'        => 'myLocation',
            'description' => 'myLocation description',
        ]);

        for ($i = 1; $i <= 50; $i++) {
            Product::create([
                'name' => random_int(100, 999) . 'API', // Generate a random API number like 123API
                'code' => Str::random(5), // Generate a random string of 5 characters
                'description' => Str::random(30), // Generate a random string of 30 characters
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(storage_path('jobs.json'));
        $data = json_decode($json, true);
      
        // php artisan db:seed --class=Jobsseeder

        foreach ($data as $item) {
            DB::table('jobs')->insert([
                'title' => $item['title'],
                'type' => $item['type'],
                'location' => $item['location'],
                'description' => $item['description'],
                'salary' => $item['salary'],
                'name' => $item['name'],
                'cdescription' => $item['cdescription'],
                'contactEmail' => $item['contactEmail'],
                'contactPhone' => $item['contactPhone'],

                'created_at' => now(), // Optional: set created_at and updated_at timestamps
                'updated_at' => now(),
            ]);
    }
}
}
<?php

namespace Database\Seeders;

use App\Models\Admin\Book;
use App\Models\Admin\Editorial;
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
        Editorial::factory(10)->create();
        Book::factory(20)->create();
        
        
        

        
    }
}

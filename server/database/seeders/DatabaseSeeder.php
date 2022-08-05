<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Muhamad Rezky Rizaldi',
            'email' => 'testing@testing.com',
            'password' => 'password',
        ]);

        $this->call(AffiliationSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(GenerationSeeder::class);
        $this->call(TalentSeeder::class);
        $this->call(YouTubeSeeder::class);
    }
}

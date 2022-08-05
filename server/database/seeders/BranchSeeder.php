<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branch = [
            [
                'affiliation_id' => 1,
                'name' => 'hololive',
                'code' => 'JP',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'launched_at' => '2017-09-07',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliation_id' => 1,
                'name' => 'hololive Indonesia',
                'code' => 'ID',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'launched_at' => '2020-04-10',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliation_id' => 1,
                'name' => 'hololive English',
                'code' => 'EN',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'launched_at' => '2021-12-09',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliation_id' => 1,
                'name' => 'hololive China',
                'code' => 'CN',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'launched_at' => '2019-09-27',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliation_id' => 1,
                'name' => 'HOLOSTARS',
                'code' => 'JP',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'launched_at' => '2019-05-27',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliation_id' => 1,
                'name' => 'HOLOSTARS English',
                'code' => 'EN',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'launched_at' => '2022-07-14',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'affiliation_id' => 1,
                'name' => 'Staff',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($branch as $branch) {
            Branch::create($branch);
        }
    }
}

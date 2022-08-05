<?php

namespace Database\Seeders;

use App\Models\Generation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $holo_jp_gens = [
            [
                'branch_id' => 1,
                'name' => 'Gen 0',
                'slug' => 'jp-gen-0',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 1,
                'name' => 'Gen 1',
                'slug' => 'jp-gen-1',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 1,
                'name' => 'Gen 2',
                'slug' => 'jp-gen-2',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 1,
                'name' => 'Gamers',
                'slug' => 'jp-gamers',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 1,
                'name' => 'Gen 3',
                'slug' => 'jp-gen-3',
                'known_as' => 'hololive Fantasy',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 1,
                'name' => 'Gen 4',
                'slug' => 'jp-gen-4',
                'known_as' => 'holoForce',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 1,
                'name' => 'Gen 5',
                'slug' => 'jp-gen-5',
                'known_as' => 'holoFive',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 1,
                'name' => 'Gen 6',
                'slug' => 'jp-gen-6',
                'known_as' => 'Secret Society holoX',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $holo_id_gens = [
            [
                'branch_id' => 2,
                'name' => 'Gen 1',
                'slug' => 'id-gen-1',
                'known_as' => 'AREA15',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 2,
                'name' => 'Gen 2',
                'slug' => 'id-gen-2',
                'known_as' => 'holoro',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 2,
                'name' => 'Gen 3',
                'slug' => 'id-gen-3',
                'known_as' => 'holoh3ro',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $holo_en_gens = [
            [
                'branch_id' => 3,
                'name' => '-Myth-',
                'slug' => 'en-myth',
                'known_as' => 'holoMyth',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 3,
                'name' => 'Project: HOPE',
                'slug' => 'en-project-hope',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 3,
                'name' => '-Council-',
                'slug' => 'en-council',
                'known_as' => 'holoCouncil',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $holo_cn_gens = [
            [
                'branch_id' => 4,
                'name' => 'Gen 1',
                'slug' => 'cn-gen-1',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 4,
                'name' => 'Gen 2',
                'slug' => 'cn-gen-2',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $holostars_jp_gens = [
            [
                'branch_id' => 5,
                'name' => 'Gen 1',
                'slug' => 'holostars-jp-gen-1',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 5,
                'name' => 'Gen 2',
                'slug' => 'holostars-jp-gen-2',
                'known_as' => 'SunTempo',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 5,
                'name' => 'Gen 3',
                'slug' => 'holostars-jp-gen-3',
                'known_as' => 'Trinero',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'branch_id' => 5,
                'name' => 'UPROAR!!',
                'slug' => 'holostars-jp-uproar',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $holostars_en_gens = [
            [
                'branch_id' => 6,
                'name' => 'HOLOSTARS EN -TEMPUS-',
                'slug' => 'holostars-en-tempus',
                'known_as' => 'holoTEMPUS',
                'description' => 'lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        $holo_gens = array_merge($holo_jp_gens, $holo_id_gens, $holo_en_gens, $holo_cn_gens, $holostars_jp_gens, $holostars_en_gens);
        foreach ($holo_gens as $generation) {
            Generation::create($generation);
        }
    }
}

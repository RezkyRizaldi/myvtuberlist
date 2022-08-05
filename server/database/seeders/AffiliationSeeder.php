<?php

namespace Database\Seeders;

use App\Models\Affiliation;
use Illuminate\Database\Seeder;

class AffiliationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $affiliations = [
            [
                'name' => 'hololive production',
                'slug' => 'hololive-production',
                'description' => 'Hololive Production (ホロライブプロダクション hororaibu purodakushon, stylized in lowercase), or simply known as hololive (ホロライブ), is a Virtual Talent agency consisting of Virtual YouTubers owned by Japanese tech entertainment company COVER Corporation.',
                'launched_at' => '2017-12-21',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'NIJISANJI',
                'slug' => 'nijisanji',
                'description' => 'NIJISANJI Project (にじさんじプロジェクト), colloquially known as just NIJISANJI, is an agency of primarily 2D Virtual YouTubers who are also known as "Virtual Livers"[note 1] (バーチャルライバー Bācharu Raibā) when posting on sites outside of YouTube, such as NicoNico Douga, Twitch and Bilibili.',
                'launched_at' => '2018-02-01',
                'logo_url' => 'https://via.placeholder.com/150',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($affiliations as $affiliation) {
            Affiliation::create($affiliation);
        }
    }
}

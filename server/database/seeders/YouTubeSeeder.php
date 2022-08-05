<?php

namespace Database\Seeders;

use App\Models\Channel;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class YouTubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = config('constants.channel_ids.hololive_production');
        foreach ($arr as $values) {
            foreach ($values as $value) {
                foreach ($value as $val) {
                    foreach ($val as $v) {
                        $data[] = $v;
                    }
                }
            }
        }

        $url = 'https://youtube.googleapis.com/youtube/v3';
        $key = env('YOUTUBE_API_KEY');
        $part = 'snippet,statistics';
        $id = implode(',', $data);
        $endpoint = "$url/channels?part=$part&id=$id&key=$key";
        $response = Http::get($endpoint);
        $result = json_decode($response->body());

        foreach ($result->items as $item) {
            $channel_data[] = [
                'channel_id' => $item->id,
                'title' => $item->snippet->title,
                'description' => $item->snippet->description,
                'published_at' => Carbon::parse($item->snippet->publishedAt)->format('Y-m-d H:i:s'),
                'thumbnail_url' => $item->snippet->thumbnails->medium->url,
                'country' => $item->snippet->country,
                'view_count' => $item->statistics->viewCount,
                'subscriber_count' => $item->statistics->subscriberCount,
                'hidden_subscriber_count' => $item->statistics->hiddenSubscriberCount,
                'video_count' => $item->statistics->videoCount,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];

            usort($channel_data, function ($a, $b) use ($data) {
                $a_index = array_search($a['channel_id'], $data);
                $b_index = array_search($b['channel_id'], $data);
                return $a_index <=> $b_index;
            });

            $final = json_encode(array_values($channel_data), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            Storage::put('public/youtube.json', $final);
        }

        Channel::insert($channel_data);
    }
}

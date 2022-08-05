<?php

namespace App\Models;

use App\Casts\PublishedAtCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Channel
 *
 * @property int $id
 * @property string $channel_id
 * @property string $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $published_at
 * @property string|null $thumbnail_url
 * @property string|null $country
 * @property string|null $view_count
 * @property string|null $subscriber_count
 * @property bool $hidden_subscriber_count
 * @property string|null $video_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Channel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Channel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Channel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereHiddenSubscriberCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereSubscriberCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereThumbnailUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereVideoCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Channel whereViewCount($value)
 * @mixin \Eloquent
 */
class Channel extends Model
{
    use HasFactory;

    protected $casts = [
        'published_at' => 'datetime',
        'hidden_subscriber_count' => 'boolean',
    ];

    protected $fillable = [
        'channel_id',
        'title',
        'description',
        'published_at',
        'thumbnail_url',
        'country',
        'view_count',
        'subscriber_count',
        'hidden_subscriber_count',
        'video_count',
    ];
}

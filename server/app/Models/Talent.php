<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Talent
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $japanese_name
 * @property array|null $nicknames
 * @property string|null $description
 * @property string|null $greeting
 * @property array|null $images_url
 * @property \Illuminate\Support\Carbon|null $debuted_at
 * @property string|null $debut_platform
 * @property string|null $status
 * @property string|null $gender
 * @property string|null $age
 * @property \Illuminate\Support\Carbon|null $birthday
 * @property float|null $height
 * @property array|null $oshi_mark
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Generation[] $generations
 * @property-read int|null $generations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Talent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Talent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Talent query()
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereDebutPlatform($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereDebutedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereGreeting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereImagesUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereJapaneseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereNicknames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereOshiMark($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Talent whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Talent extends Model
{
    use HasFactory;

    protected $status = [
        'active',
        'graduated',
        'retired',
    ];

    protected $gender = [
        'male',
        'female',
    ];

    protected $casts = [
        'debuted_at' => 'datetime',
        'birthday' => 'datetime',
        'nicknames' => 'array',
        'images_url' => 'array',
        'oshi_mark' => 'array',
    ];

    protected $fillable = [
        'name',
        'slug',
        'original_name',
        'nicknames',
        'description',
        'greeting',
        'images_url',
        'debuted_at',
        'status',
        'gender',
        'age',
        'birthday',
        'height',
        'oshi_mark',
        'affiliation_id',
        'branch_id',
        'generation_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function generations(): BelongsToMany
    {
        return $this->belongsToMany(Generation::class, GenerationTalent::class);
    }
}

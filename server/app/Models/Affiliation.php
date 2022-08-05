<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Affiliation
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $launched_at
 * @property string|null $logo_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Branch[] $branches
 * @property-read int|null $branches_count
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation whereLaunchedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation whereLogoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Affiliation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Affiliation extends Model
{
    use HasFactory;

    protected $casts = [
        'launched_at' => 'datetime',
    ];

    protected $fillable = [
        'name',
        'slug',
        'description',
        'launched_at',
        'logo_url',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getDescriptionAttribute($value)
    {
        return $value ?: 'No description available.';
    }

    public function getLogoUrlAttribute($value)
    {
        return $value ?: 'https://via.placeholder.com/150';
    }

    public function branches(): HasMany
    {
        return $this->hasMany(Branch::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Generation
 *
 * @property int $id
 * @property int $branch_id
 * @property string $name
 * @property string $slug
 * @property string|null $known_as
 * @property string|null $description
 * @property string|null $logo_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Branch $branch
 * @method static \Illuminate\Database\Eloquent\Builder|Generation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Generation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Generation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereKnownAs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereLogoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Generation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Generation extends Model
{
    use HasFactory;

    protected $casts = [
        'launched_at' => 'datetime',
    ];

    protected $fillable = [
        'branch_id',
        'name',
        'slug',
        'known_as',
        'description',
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

    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    public function talents(): BelongsToMany
    {
        return $this->belongsToMany(Talent::class, GenerationTalent::class);
    }
}

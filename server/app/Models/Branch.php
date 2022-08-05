<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Branch
 *
 * @property int $id
 * @property int $affiliation_id
 * @property string $name
 * @property string|null $code
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $launched_at
 * @property string|null $logo_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Affiliation $affiliation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Generation[] $generations
 * @property-read int|null $generations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Branch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Branch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Branch query()
 * @method static \Illuminate\Database\Eloquent\Builder|Branch whereAffiliationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Branch whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Branch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Branch whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Branch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Branch whereLaunchedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Branch whereLogoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Branch whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Branch whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Branch extends Model
{
    use HasFactory;

    protected $casts = [
        'launched_at' => 'datetime',
    ];

    protected $fillable = [
        'affiliation_id',
        'name',
        'code',
        'description',
        'launched_at',
        'logo_url',
    ];

    public function getRouteKeyName()
    {
        return 'code';
    }

    public function getDescriptionAttribute($value)
    {
        return $value ?: 'No description available.';
    }

    public function affiliation(): BelongsTo
    {
        return $this->belongsTo(Affiliation::class);
    }

    public function generations(): HasMany
    {
        return $this->hasMany(Generation::class);
    }
}

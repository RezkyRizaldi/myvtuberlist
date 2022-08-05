<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\GenerationTalent
 *
 * @property int $id
 * @property int $generation_id
 * @property int $talent_id
 * @method static \Illuminate\Database\Eloquent\Builder|GenerationTalent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenerationTalent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GenerationTalent query()
 * @method static \Illuminate\Database\Eloquent\Builder|GenerationTalent whereGenerationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenerationTalent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GenerationTalent whereTalentId($value)
 * @mixin \Eloquent
 */
class GenerationTalent extends Pivot
{
    //
}

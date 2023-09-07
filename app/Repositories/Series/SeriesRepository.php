<?php

declare(strict_types=1);

namespace App\Repositories\Series;

use App\Contracts\Series\SeriesContract;
use App\Models\Series;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Collection;

/**
 * Series repository package
 *
 * @package App\Repositories\Series
 * @author  Thiago Silva <thiiagoms@proton.me>
 * @version 1.0
 */
class SeriesRepository extends Repository implements SeriesContract
{
    protected $model = Series::class;

    /**
     * @param int $seriesId
     * @return Collection|null
     */
    public function episodes(int $seriesId): Collection|null
    {
        return null;
    }
}

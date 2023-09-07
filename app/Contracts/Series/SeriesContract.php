<?php

namespace App\Contracts\Series;

use App\Contracts\Contract;
use Illuminate\Database\Eloquent\Collection;

/**
 * Series contract with all methods
 *
 * @package App\Contracts\Series
 * @author  Thiago <thiiagoms@proton.me>
 * @version 1.0
 */
interface SeriesContract extends Contract
{
    /**
     * @param int $seriesId
     * @return Collection|null
     */
    public function episodes(int $seriesId): Collection|null;
}

<?php

namespace App\Repositories\Episodes;

use App\Contracts\Episodes\EpisodesContract;
use App\Models\Episodes;
use App\Repositories\Repository;
use Illuminate\Support\Facades\DB;

class EpisodesRepository extends Repository implements EpisodesContract
{
    protected $model = Episodes::class;

    /**
     * @param array $params
     * @return void
     */
    public function massInsert(array $params): void
    {
        $this->model->insert($params);
    }

    /**
     * @param int $seriesId
     * @return void
     */
    public function massDelete(int $seriesId): void
    {
        DB::table('episodes')->where('series_id', $seriesId)->delete();
    }
}

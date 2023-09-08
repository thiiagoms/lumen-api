<?php

declare(strict_types=1);

namespace App\Services\Episodes;

use App\Repositories\Episodes\EpisodesRepository;
use App\Services\Service;

class EpisodesService extends Service
{
    /**
     * @param EpisodesRepository $episodesRepository
     */
    public function __construct(private EpisodesRepository $episodesRepository)
    {
    }

    /**
     * @param array $params
     * @return array
     */
    private function getParams(array $params): array
    {
        return [
            'seasons' => $params['seasons'],
            'episodes' => $params['episodes']
        ];
    }

    /**
     * @param array $params
     * @param int $seriesId
     * @return void
     */
    public function store(array $params, int $seriesId): void
    {
        $params = $this->getParams($params);

        $seasons  = (int) $params['seasons'];
        $episodes = (int) $params['episodes'];

        for ($seasonsCount = 1; $seasonsCount <= $seasons; $seasonsCount++) {
            for ($episodesCount = 1; $episodesCount <= $episodes; $episodesCount++) {
                $data[] = [
                    'season'    => $seasonsCount,
                    'episode'   => $episodesCount,
                    'series_id' => $seriesId
                ];
            }
        }

        $this->episodesRepository->massInsert($data);
    }

    /**
     *
     * @param int $seriesId
     * @return void
     */
    public function destroy(int $seriesId): void
    {
        $this->episodesRepository->massDelete($seriesId);
    }
}

<?php

declare(strict_types=1);

namespace App\Services\Series;

use App\Enums\Series\SeriesEnum;
use App\Repositories\Series\SeriesRepository;
use App\Services\Episodes\EpisodesService;
use App\Services\Service;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

/**
 * Business logic for create new series
 *
 * @package App\Services\Series
 * @author  Thiago Silva <thiiagoms@proton.me>
 * @version 1.0
 */
final class SeriesService extends Service
{
    /**
     * @param SeriesRepository $seriesRepository
     */
    public function __construct(private EpisodesService $episodeService, private SeriesRepository $seriesRepository)
    {
    }

    /**
     * @param mixed|null $collection
     * @return int
     */
    private function getStatusCode(mixed $collection): int
    {
        return empty($collection) ? Response::HTTP_NOT_FOUND : Response::HTTP_OK;
    }

    /**
     * @param int|null $id
     * @return Collection|null
     */
    private function getSeries(int $id = null): mixed
    {
        return !is_null($id) ? $this->seriesRepository->show($id) : $this->seriesRepository->index();
    }

    /**
     * @param string $field
     * @return bool
     */
    private function validateSeriesNameLength(string $field): bool
    {
        $seriesLength = strlen($field);

        return $seriesLength >= SeriesEnum::MIN_CHARACTERS_SERIES_NAME &&
            $seriesLength <= SeriesEnum::MAX_CHARACTERS_SERIES_NAME;
    }

    /**
     * @param array $params
     * @return array
     */
    private function getParams(array $params): array
    {
        if (!isset($params['description'])) {
            $params['description'] = null;
        }

        return ['name' => $params['name'], 'description' => $params['description']];
    }

    /**
     * Return all TV Series
     *
     * @return array
     */
    public function index(): array
    {
        $series = $this->getSeries();

        $statusCode = $this->getStatusCode($series);

        return ['series' => $series, 'status' => $statusCode];
    }

    /**
     * @param int $id
     * @return array
     */
    public function show(int $id): array
    {
        $series = $this->getSeries($id);

        $statusCode = $this->getStatusCode($series);

        return ['series' => $series, 'status' => $statusCode];
    }

    /**
     * @param array $params
     * @return array
     */
    public function store(array $params): array
    {
        $params = $this->cleanFields($params);

        if (! $this->validateSeriesNameLength($params['name'])) {
            return ['error' => "Invalid characters length", 'status' => Response::HTTP_BAD_REQUEST];
        }

        DB::transaction(function () use ($params) {

            $seriesId = $this->seriesRepository->store($this->getParams($params));

            $this->episodeService->store($params, $seriesId);
        });

        return ['data' => '', 'status' => Response::HTTP_CREATED];
    }

    /**
     * @param array $params
     * @param int $seriesId
     * @return array
     */
    public function update(array $params, int $seriesId): array
    {
        $series = $this->getSeries($seriesId);

        if (is_null($series)) {
            return ['error' => 'Invalid Id' , 'status' => $this->getStatusCode($series)];
        }

        $params = $this->getParams($this->cleanFields($params));

        if (! $this->validateSeriesNameLength($params['name'])) {
            return ['error' => "Invalid characters length", 'status' => Response::HTTP_BAD_REQUEST];
        }

        $this->seriesRepository->update($params, $seriesId);

        return ['data' => $params, 'status' => Response::HTTP_CREATED];
    }

    /**
     * @param int $seriesId
     * @return array
     */
    public function destroy(int $seriesId): array
    {
        $series = $this->getSeries($seriesId);

        if (is_null($series)) {
            return ['error' => 'Invalid Id' , 'status' => $this->getStatusCode($series)];
        }

        DB::transaction(function () use ($series) {

            // First delete all episodes
            $this->episodeService->destroy($series->id);

            // than delete series
            $this->seriesRepository->destroy($series->id);
        });

        return ['data' => '', 'status' => Response::HTTP_NO_CONTENT];
    }
}

<?php

namespace App\Http\Controllers;

use App\Repository\SeriesRepository;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * @var SeriesRepository $seriesRepository
     */
    private $seriesRepository;

    /**
     * Series repository instance on construct.
     *
     * @param SeriesRepository $seriesRepo
     */
    public function __construct(SeriesRepository $seriesRepo)
    {
        $this->seriesRepository = $seriesRepo;
    }

    /**
     * Display a collection of the series
     *
     * @return object
     */
    public function index(): object
    {
        return $this->seriesRepository->getAll();
    }

    /**
     * Display a collection of one resource
     *
     * @param int $id
     * @return false|string
     */
    public function show(int $id)
    {
        $series = $this->seriesRepository->search($id);

        return !empty($series) ? response()->json($series)
            : response()->json(['message' => 'no content'], 404);
    }

    /**
     * Create new series
     *
     * @param Request $request
     * @return mixed
     *
     */
    public function store(Request $request)
    {
        return $this->seriesRepository->create($request);
    }

    /**
     * Update series
     *
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, int $id)
    {
        $serie = $this->seriesRepository->search($id);

        return !empty($serie)
            ? $this->seriesRepository->refresh($request, $id)
            : response()->json(
                [
                    'error' => 'Not found'
                ],
                404
            );
    }

    /**
     * Destroy series by id
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id)
    {
        $serie = $this->seriesRepository->delete($id);

        return $serie === 0 ?  response()->json([
            'error' => 'Not found'
        ], 404) : response()->json('', 204);
    }
}

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

    public function store(Request $request)
    {
        return $this->seriesRepository->create($request);
    }

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

    public function destroy(int $id)
    {
        $serie = $this->seriesRepository->delete($id);

        return $serie === 0 ?  response()->json([
            'error' => 'Not found'
        ], 404) : response()->json('', 204);
    }
}

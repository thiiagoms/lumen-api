<?php

namespace App\Http\Controllers;

use App\Repository\EpisodesRepository;
use Illuminate\Http\Request;

class Episodescontroller extends Controller
{
    /**
     * @var EpisodesRepository $episodesRepository
     */
    private $episodesRepository;

    /**
     * Episodes repository on construct
     *
     * @param EpisodesRepository $episodesRepo
     */
    public function __construct(EpisodesRepository $episodesRepo)
    {
        $this->episodesRepository = $episodesRepo;
    }

    /**
     * Display a collection of the episodes
     *
     * @return object
     */
    public function index(): object
    {
        return $this->episodesRepository->getAll();
    }

    /**
     * Display a collection of one episodes
     *
     * @param int $id
     * @return false|string
     */
    public function show(int $id)
    {
        $episodes = $this->episodesRepository->search($id);

        return !empty($episodes) ? response()->json($episodes)
            : response()->json(['message' => 'no content'], 404);
    }

    /**
     * Create new episodes
     *
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return $this->episodesRepository->create($request);
    }

    /**
     * Update episodes by id
     * 
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, int $id)
    {
        $episodes = $this->episodesRepository->search($id);

        return !empty($episodes)
            ? $this->episodesRepository->refresh($request, $id)
            : response()->json(
                [
                    'error' => 'Not found'
                ],
                404
            );
    }

    /**
     * Delete episodes by id
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $id)
    {
        $episodes = $this->episodesRepository->delete($id);

        return $episodes === 0 ?  response()->json([
            'error' => 'Not found'
        ], 404) : response()->json('', 204);
    }

    /**
     * Return episodes by series id
     *
     * @param int $id
     */
    public function series(int $id)
    {
        return $this->episodesRepository->getSeries($id);
    }
}

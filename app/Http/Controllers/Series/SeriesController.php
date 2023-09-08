<?php

declare(strict_types=1);

namespace App\Http\Controllers\Series;

use App\Http\Controllers\Controller;
use App\Services\Series\SeriesService;
use Illuminate\Http\{JsonResponse, Request, Response};

class SeriesController extends Controller
{
    /**
     * @param SeriesService $seriesService
     */
    public function __construct(private SeriesService $seriesService)
    {
    }

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $result = $this->seriesService->index();

        return response()->json(['data' => $result['series']], $result['status']);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if (!$id) {
            return response()->json(['error' => 'Invalid id'], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->seriesService->show($id);

        return response()->json(['data' => $result['series']], $result['status']);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $result = $this->seriesService->store($request->toArray());

        return response()->json($result, $result['status']);
    }

    /**
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if (!$id) {
            return response()->json(['error' => 'Invalid id'], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->seriesService->update($request->toArray(), $id);

        return response()->json($result, $result['status']);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if (!$id) {
            return response()->json(['error' => 'Invalid id'], Response::HTTP_BAD_REQUEST);
        }

        $result = $this->seriesService->destroy($id);

        return response()->json($result, $result['status']);
    }
}

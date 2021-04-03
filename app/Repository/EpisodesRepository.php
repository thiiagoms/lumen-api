<?php

namespace App\Repository;

use App\Models\Episodes as EpisodesModel;
use Illuminate\Http\Request;

class EpisodesRepository
{
    /***
     * EpisodesModel on Repository.
     *
     * @var Episodes $episodes
     */
    private $episodesModel;

    public function __construct(EpisodesModel $episodesModel)
    {
        $this->episodesModel = new $episodesModel();
    }

    public function getAll()
    {
        return $this->episodesModel->all();
    }

    public function search(int $id)
    {
        return $this->episodesModel->find($id);
    }

    public function create(Request $request)
    {
        return $this->episodesModel->create($request->all(), 201);
    }

    public function refresh(Request $request, int $id)
    {
        $serie = $this->search($id);

        return $serie
            ->fill($request->all())
            ->save();
    }

    public function delete(int $id)
    {
        return $this->episodesModel->destroy($id);
    }

    public function getSeries(int $id)
    {
        return $this->episodesModel->query()
            ->where('series_id', $id)
            ->paginate();
    }
}

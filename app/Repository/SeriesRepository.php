<?php

namespace App\Repository;

use App\Models\Series as SeriesModel;
use Illuminate\Http\Request;

class SeriesRepository
{
    /***
     * SeriesModel on Repository.
     *
     * @var Series $series
     */
    private $seriesModel;

    public function __construct(SeriesModel $seriesModel)
    {
        $this->seriesModel = new $seriesModel();
    }

    public function getAll()
    {
        return $this->seriesModel->all();
    }

    public function search(int $id)
    {
        return $this->seriesModel->find($id);
    }

    public function create(Request $request)
    {
        return $this->seriesModel->create($request->all(), 201);
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
        return $this->seriesModel->destroy($id);
    }
}

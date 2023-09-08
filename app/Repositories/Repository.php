<?php

namespace App\Repositories;

use App\Contracts\Contract;
use App\Models\Series;
use Illuminate\Database\Eloquent\Collection;
use Laravel\Lumen\Application;

/**
 * Abstract repository package
 *
 * @package App\Repositories
 * @author  Thiago Silva <thiiagoms@proton.me>
 * @version 1.0
 */
abstract class Repository implements Contract
{
    /** @var Application|mixed */
    protected $model;

    /**
     * @return mixed
     */
    private function handle(): mixed
    {
        return app($this->model);
    }

    public function __construct()
    {
        $this->model = $this->handle();
    }

    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param int $id
     * @return Collection|null
     */
    public function show(int $id): mixed
    {
        return $this->model->find($id);
    }

    /**
     * @param array $params
     * @return int
     */
    public function store(array $params): int
    {
        return $this->model->create($params)->id;
    }

    /**
     * @param array $params
     * @param int $id
     * @return void
     */
    public function update(array $params, int $id): void
    {
        $this->model->where('id', $id)->update($params);
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $this->model->destroy($id);
    }
}

<?php

declare(strict_types=1);

namespace App\Contracts;

use Illuminate\Database\Eloquent\Collection;

/**
 * Default contract
 *
 * @package App\Contracts\Series
 * @author  Thiago <thiiagoms@proton.me>
 * @version 1.0
 */
interface Contract
{
    /**
     * @return Collection
     */
    public function index(): Collection;

    /**
     * @param int $id
     * @return mixed|null
     */
    public function show(int $id): mixed;

    /**
     * @param array $params
     * @return int
     */
    public function store(array $params): int;

    /**
     * @param array $params
     * @param int $id
     * @return void
     */
    public function update(array $params, int $id): void;

    /**
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;
}

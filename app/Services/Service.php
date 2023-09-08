<?php

namespace App\Services;

abstract class Service
{
    /**
     * @param string $field
     * @return string
     */
    private function removeTags(string $field): string
    {
        return trim(strip_tags($field));
    }

    /**
     * @param array $params
     * @return array
     */
    protected function cleanFields(array $params): array
    {
        return array_map(fn (string $field): string => $this->removeTags($field), $params);
    }

    protected function getUserId()
    {
    }
}

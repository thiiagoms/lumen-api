<?php

declare(strict_types=1);

namespace App\Enums\Series;

abstract class SeriesEnum
{
    /**
     * The series name must have the minimum of 02 characters (with spaces)
     *
     * @var int
     */
    public const MIN_CHARACTERS_SERIES_NAME = 2;

    /**
     * The series name must have the max of 155 characters (with spaces)
     *
     * @var int
     */
    public const MAX_CHARACTERS_SERIES_NAME = 155;
}

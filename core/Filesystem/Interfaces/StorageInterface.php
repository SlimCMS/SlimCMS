<?php

declare(strict_types=1);

namespace SlimCms\Filesystem\Interfaces;

/**
 * Interface StorageInterface
 * @package SlimCms\Filesystem\Interfaces
 */
interface StorageInterface
{
    /**
     * @param string $driver
     * @return DriverStorageInterface
     */
    public static function driver(string $driver): DriverStorageInterface;
}
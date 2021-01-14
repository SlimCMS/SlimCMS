<?php

declare(strict_types=1);

namespace SlimCms\Filesystem;

use SlimCms\Filesystem\Exceptions\NotSupportedDriverException;
use SlimCms\Filesystem\Interfaces\DriverStorageInterface;
use SlimCms\Filesystem\Interfaces\StorageInterface;

class Storage implements StorageInterface
{
    /**
     * Supported drivers.
     *
     * @var array|string[]
     */
    private static array $supported = [
        'local' => LocalStorage::class,
    ];

    /**
     * @inheritDoc
     */
    public static function driver(string $driver): DriverStorageInterface
    {
        if (array_key_exists($driver, self::$supported)) {
            // TODO
        }

        throw new NotSupportedDriverException($driver);
    }
}
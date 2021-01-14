<?php

declare(strict_types=1);

namespace SlimCms\Filesystem;

use SlimCms\Filesystem\Exceptions\NotExistsFile;
use SlimCms\Filesystem\Interfaces\DriverStorageInterface;

/**
 * Class LocalStorage
 * @package SlimCms\Filesystem
 */
class LocalStorage implements DriverStorageInterface
{
    /**
     * @inheritDoc
     */
    public function exists(string $path): bool
    {
        return file_exists($path);
    }

    /**
     * @inheritDoc
     */
    public function write(string $path, string $content): void
    {
        if ($this->exists($path)) {
            file_put_contents($path, $content);
        }

        throw new NotExistsFile($path);
    }

    /**
     * @inheritDoc
     */
    public function getContent(string $path): string
    {
        if (!file_exists($path)) {
            throw new NotExistsFile($path);
        }

        return file_get_contents($path);
    }
}
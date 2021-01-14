<?php

declare(strict_types=1);

namespace SlimCms\Filesystem\Interfaces;

use SlimCms\Filesystem\Exceptions\NotExistsFile;

/**
 * Interface DriverStorageInterface
 * @package SlimCms\Filesystem\Interfaces
 */
interface DriverStorageInterface
{
    /**
     * @param string $path
     * @return bool
     */
    public function exists(string $path): bool;

    /**
     * @param string $path
     * @param string $content
     * @throws NotExistsFile
     * @return void
     */
    public function write(string $path, string $content): void;

    /**
     * @param string $path
     * @throws NotExistsFile
     * @return string
     */
    public function getContent(string $path): string;
}
<?php

declare(strict_types=1);

namespace SlimCms\Configuration;

use SlimCms\Configuration\Interfaces\ConfigInterface;

class Config implements ConfigInterface
{
    /**
     * @inheritDoc
     */
    public function get(string $path): mixed
    {
        // TODO: Implement get() method.
    }

    /**
     * @inheritDoc
     */
    public function isset(string $path): bool
    {
        // TODO: Implement isset() method.
    }
}
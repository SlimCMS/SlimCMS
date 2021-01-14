<?php

declare(strict_types=1);

namespace SlimCms;

use DI\Container;

/**
 * Class Core
 * @package SlimCms
 */
class Core
{
    /** @var Container */
    private Container $container;

    /**
     * Core constructor.
     * @param Container|null $container
     */
    public function __construct(?Container $container = null)
    {
        $this->container = $container ?? new Container();
    }

    public function work(): void
    {
        echo "work";
    }
}
<?php

declare(strict_types=1);

namespace SlimCms\Module;

use SlimCms\Module\Interfaces\ModuleManagerInterface;

class ModuleManager implements ModuleManagerInterface
{
    /**
     * @var array
     */
    private array $modulesIncluded = [];

    public function boot(): void
    {

    }
}
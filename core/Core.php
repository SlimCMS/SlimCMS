<?php

declare(strict_types=1);

namespace SlimCms;

use DI\Container;
use SlimCms\Module\Interfaces\ModuleManagerInterface;
use SlimCms\Module\ModuleManager;
use SlimCms\Route\Interfaces\RouterInterface;
use SlimCms\Route\Router;
use function DI\autowire;

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
        $this->injectDependsContainer($this->container);
    }

    /**
     * @param Container $container
     * @return void
     */
    public function injectDependsContainer(Container &$container): void
    {
        $container->set(RouterInterface::class, autowire(Router::class));
        $container->set(ModuleManagerInterface::class, autowire(ModuleManager::class));
    }

    public function work(): void
    {
        $moduleManager = $this->container->get(ModuleManagerInterface::class);
        $moduleManager->boot();
        $moduleManager->inject($this->container);
    }
}
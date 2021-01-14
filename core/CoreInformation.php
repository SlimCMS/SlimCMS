<?php

declare(strict_types=1);

namespace SlimCms;

class CoreInformation
{
    /**
     * Version of core SlimCMS.
     *
     * @var string
     */
    public static string $version = "0.0.1";

    /**
     * Last release date.
     *
     * @var string
     */
    public static string $lastRelease = "2021-4-14";

    /**
     * Check new release core.
     *
     * @return bool
     */
    public function checkHasUpdate(): bool
    {
        // TODO
        return false;
    }

    /**
     * Update core SlimCMS.
     *
     * @return bool
     */
    public function updateCore(): bool
    {
        // TODO
        return false;
    }
}
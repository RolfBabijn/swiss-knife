<?php

declare (strict_types=1);
namespace EasyCI20220609\Symplify\SymplifyKernel\Contract;

use EasyCI20220609\Psr\Container\ContainerInterface;
/**
 * @api
 */
interface LightKernelInterface
{
    /**
     * @param string[] $configFiles
     */
    public function createFromConfigs(array $configFiles) : ContainerInterface;
    public function getContainer() : ContainerInterface;
}

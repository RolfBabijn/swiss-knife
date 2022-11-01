<?php

declare (strict_types=1);
namespace EasyCI202211;

use EasyCI202211\Symfony\Component\Console\Style\SymfonyStyle;
use EasyCI202211\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use EasyCI202211\Symplify\PackageBuilder\Console\Style\SymfonyStyleFactory;
use EasyCI202211\Symplify\PackageBuilder\Parameter\ParameterProvider;
use EasyCI202211\Symplify\PackageBuilder\Reflection\PrivatesAccessor;
use EasyCI202211\Symplify\SmartFileSystem\FileSystemFilter;
use EasyCI202211\Symplify\SmartFileSystem\FileSystemGuard;
use EasyCI202211\Symplify\SmartFileSystem\Finder\FinderSanitizer;
use EasyCI202211\Symplify\SmartFileSystem\Finder\SmartFinder;
use EasyCI202211\Symplify\SmartFileSystem\SmartFileSystem;
use function EasyCI202211\Symfony\Component\DependencyInjection\Loader\Configurator\service;
return static function (ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->defaults()->public()->autowire();
    // symfony style
    $services->set(SymfonyStyleFactory::class);
    $services->set(SymfonyStyle::class)->factory([service(SymfonyStyleFactory::class), 'create']);
    // filesystem
    $services->set(FinderSanitizer::class);
    $services->set(SmartFileSystem::class);
    $services->set(SmartFinder::class);
    $services->set(FileSystemGuard::class);
    $services->set(FileSystemFilter::class);
    $services->set(ParameterProvider::class)->args([service('service_container')]);
    $services->set(PrivatesAccessor::class);
};

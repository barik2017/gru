<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.app' shared service.

$this->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('Lp4YxvsTto', 0, ($this->targetDirs[0].'/pools'));

$instance->setLogger(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->services['logger'] = new \Symfony\Component\HttpKernel\Log\Logger()) && false ?: '_'});

return $instance;

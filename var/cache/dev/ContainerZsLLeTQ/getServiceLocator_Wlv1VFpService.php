<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.Wlv1VFp' shared service.

return $this->privates['service_locator.Wlv1VFp'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('logger' => function () {
    return ($this->privates['monolog.logger'] ?? $this->load(__DIR__.'/getMonolog_LoggerService.php'));
}));

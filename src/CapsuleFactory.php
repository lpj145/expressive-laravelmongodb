<?php

namespace ExpressiveLaravelMongodb;

use Illuminate\Database\Capsule\Manager as Capsule;
use Jenssegers\Mongodb\Connection;
use Psr\Container\ContainerInterface;

class CapsuleFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $capsule = new Capsule();
        $capsule->getDatabaseManager()->extend('mongodb', function($config){
            return new Connection($config);
        });
        $capsule->addConnection($container->get('config')['database']['mongodb']);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        return $capsule;
    }
}

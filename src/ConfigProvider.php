<?php

namespace ExpressiveLaravelMongodb;


use Illuminate\Database\Capsule\Manager as Capsule;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'factories' => [
                Capsule::class => CapsuleFactory::class
            ],
            'alias' => [
                'database' => Capsule::class
            ]
        ];
    }
}

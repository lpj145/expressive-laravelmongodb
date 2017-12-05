<?php

namespace ExpressiveLaravelMongodb;


use Illuminate\Database\Capsule\Manager as Capsule;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'dependencies' => [
                'factories' => [
                    Capsule::class => CapsuleFactory::class
                ],
                'aliases' => [
                    'database' => Capsule::class
                ]
            ]
        ];
    }
}

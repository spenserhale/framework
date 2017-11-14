<?php

return [
    'name' => 'Test name',
    'version' => 'Test version',
    'production' => false,
    'default-command' => Tests\FakeDefaultCommand::class,
    'commands-paths' => [],
    'commands' => [
        Tests\FakeExtraCommand::class,
    ],
    'providers' => [
        Tests\FakeServiceProvider::class,
    ],
];

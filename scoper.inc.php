<?php

declare(strict_types=1);

use Isolated\Symfony\Component\Finder\Finder;

return [
    'prefix' => 'Auth0\\WordPress\\Vendor',

    'finders' => [
        Finder::create()
            ->files()
            ->ignoreVCS(true)
            ->notName('/LICENSE|.*\\.md|.*\\.dist|Makefile|composer\\.(json|lock)/')
            ->exclude([
                'doc',
                'test',
                'test_old',
                'tests',
                'Tests',
                'vendor-bin',
            ])
			->in(['vendor', '.']),

        Finder::create()->append([
            'composer.json',
        ]),
    ],

    'exclude-namespaces' => [
        '/^Auth0\\\\WordPress\\\/',
        '/^Psr\\\/',
    ],

	'expose-global-constants' => false,
	'expose-global-classes'   => false,
	'expose-global-functions' => false,

    'patchers' => [],
];
